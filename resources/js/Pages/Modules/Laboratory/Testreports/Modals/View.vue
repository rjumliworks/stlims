<template>
  <b-modal
    v-if="selected"
    v-model="showModal"
    style="--vz-modal-width: 700px;"
    header-class="p-3 bg-light"
    title="View Report Number"
    class="v-modal-custom"
    modal-class="zoomIn"
    centered
    no-close-on-backdrop
  >
    <!-- ...content omitted for brevity... -->
<div class="row mb-3">
            <div class="col-md-12">
                <div class="row align-items-center g-3">
                    <div class="col-md">
                        <div>
                            <h6><span class="fw-semibold text-primary fs-15">{{ selected.code }}</span></h6>
                            <div class="hstack gap-3  fs-12 flex-wrap">
                                <div v-if="selected.lists.length == 0">Sample Code : 
                                    <span v-if="selected.sample_code" class="fw-medium"> {{ selected.sample_code}}</span>
                                    <span v-else class="text-muted">Not Available</span>
                                </div>
                                <div v-if="selected.lists.length == 0" class="vr" style="width: 1px;"></div>
                                <div>TSR Code : 
                                    <span v-if="selected.tsr_code" class="fw-medium">{{selected.tsr_code}}</span>
                                    <span v-else class="text-muted">Not Available</span>
                                </div>
                                <div class="vr" style="width: 1px;"></div>
                                <div>Analyst. : 
                                    <span v-if="selected.user" class="fw-medium">{{selected.user}}</span>
                                    <span v-else class="text-muted">Not Available</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="text-muted" v-if="selected.lists.length > 0"/>
        <div class="row" v-if="selected.lists.length > 0" style="max-height: 130px; overflow: auto;">
            <div class="col-md-3" v-for="(column, index) in columns" :key="index">
                <ul class="list-unstyled">
                    <li v-for="(item, idx) in column" :key="idx" class="py-1 fs-12">
                        <i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i> {{ item.sample.code }}
                    </li>
                </ul>
            </div>
        </div>
        <hr class="text-muted mt-0"/>
        <div class="row mt-2">
            <div class="col-sm-6">
                <div class="p-1 border border-dashed rounded">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm me-2">
                            <div class="avatar-title rounded bg-transparent text-primary fs-20"><i class="ri-calendar-line"></i></div>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted mb-0 fs-12">Report Date :</p>
                            <h5 class="mb-0 fs-12">{{selected.created_at}}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="p-1 border border-dashed rounded">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm me-2">
                            <div class="avatar-title rounded bg-transparent text-primary fs-20"><i class="ri-calendar-line"></i></div>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted mb-0 fs-12">Released Date :</p>
                            <h5 class="mb-0 fs-12">-</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="text-muted"/> 
        <div class="alert alert-primary alert-dismissible alert-label-icon rounded-label fade show mb-n2" role="alert">
            <i class="ri-qr-code-fill label-icon"></i><strong>QR Code</strong> - <span style="cursor: pointer;" @click="printQr()">Click here to print</span>
        </div>
       
    <template v-slot:footer>
      <b-button @click="hide" variant="light" block>Close</b-button>
      <b-button @click="openResult" variant="primary" block>Preview</b-button>
    </template>
  </b-modal>
   <Result ref="result"/>
</template>

<script>
import simplebar from "simplebar-vue";
import Result from './Result.vue';
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';

export default {
  components: { InputLabel, TextInput, simplebar, Result },
  data() {
    return {
      currentUrl: window.location.origin,
      showModal: false,
      selected: null,
      parameters: [{ name: null, result: null }],
      scale: 4.0,
      signaturePos: { x: 0, y: 0 },
      pdfUrl: null,
      pdfDoc: null,
        currentPage: 1,
        totalPages: 0,
    };
  },
  computed: {
    columns() {
      const chunkSize = Math.ceil(this.selected.lists.length / 4);
      const result = [];
      for (let i = 0; i < this.selected.lists.length; i += chunkSize) {
        result.push(this.selected.lists.slice(i, i + chunkSize));
      }
      return result;
    }
  },
  methods: {
    show(data) {
        this.signaturePos.x = 0;
        this.signaturePos.y = 0;
      this.selected = data;
      this.parameters = this.selected.analyses.map(analysis => ({
        name: analysis.testservice.testname.name,
        result: null
      }));
      this.showModal = true;
      this.pdfUrl = `/storage/uploads/testreports/${this.selected.attachment.name}`;
      this.$nextTick(() => {
        this.renderPdf();
        this.makeDraggable();
      });
    },
    hide() {
      this.showModal = false;
    },
    handleAddFile(error, fileItem) {
      if (error) return console.error('FilePond error:', error);
      const file = fileItem.file;
      const formData = new FormData();
      formData.append('pdf', file);
      formData.append('id', this.selected.qr);
      formData.append('option', 'report');

      this.$inertia.post('/testreports', formData, {
        preserveScroll: true,
        forceFormData: true,
        onSuccess: () => this.hide?.(),
        onError: () => this.errors = this.$page.props.errors
      });
    },  openResult(){
            this.$refs.result.show(this.parameters,this.selected.sample_id);
        },
    goToPage(page) {
  this.currentPage = page;
  this.renderPdf(page);
},
    renderPdf(pageNum = 1) {
      const canvasEl = this.$refs.pdfCanvas;
      const fileUrl = this.pdfUrl;
    //    this.totalPages = pdfUrl.numPages;
      if (window.PDFJS) {
        window.PDFJS.workerSrc = null;
        window.PDFJS.getDocument(fileUrl).then(pdf => {
            this.totalPages = pdf.numPages;
            if (pageNum < 1) pageNum = 1;
            if (pageNum > pdf.numPages) pageNum = pdf.numPages;
            pdf.getPage(pageNum).then(page => {
                const viewport = page.getViewport(this.scale);
                canvasEl.width = viewport.width;
                canvasEl.height = viewport.height;

                const context = canvasEl.getContext('2d');
                page.render({ canvasContext: context, viewport });
            });
        });
      } else {
        console.error('PDFJS not loaded');
      }
    },
    makeDraggable() {
      interact(this.$refs.signature).draggable({
        modifiers: [interact.modifiers.restrictRect({ restriction: 'parent' })],
        listeners: {
          move: event => {
            const target = event.target;
            const x = (parseFloat(target.dataset.x) || 0) + event.dx;
            const y = (parseFloat(target.dataset.y) || 0) + event.dy;
            target.style.transform = `translate(${x}px, ${y}px)`;
            target.dataset.x = x;
            target.dataset.y = y;
            this.signaturePos = { x, y };
          }
        }
      });
    },
    async savePdfWithSignature() {
    const signature = this.$refs.signature;
    const canvas = this.$refs.pdfCanvas;

    // Load signature image
    const sigBlob = await fetch(signature.src).then(res => res.blob());
    const sigArrayBuffer = await sigBlob.arrayBuffer();

    // Load PDF
    const pdfBytes = await fetch(this.pdfUrl).then(res => res.arrayBuffer());
    const pdfDoc = await PDFDocument.load(pdfBytes);
    const page = pdfDoc.getPages()[0];

    // Embed signature
    const img = await pdfDoc.embedPng(sigArrayBuffer);
    const sigWidthCSS = signature.offsetWidth;
    const sigHeightCSS = signature.offsetHeight;

    // Convert to PDF units
    const scaleX = page.getWidth() / canvas.offsetWidth;
    const scaleY = page.getHeight() / canvas.offsetHeight;

    const sigX = parseFloat(signature.dataset.x) || 0;
    const sigY = parseFloat(signature.dataset.y) || 0;

    const sigXPDF = sigX * scaleX;
    const sigWidthPDF = sigWidthCSS * scaleX;
    const sigHeightPDF = sigHeightCSS * scaleY;

    // 🔧 Fine-tune vertical position
    const cssYOffsetCorrection = 36; // Adjust this value: try 26, 30, etc.
    const yOffsetCorrection = cssYOffsetCorrection * scaleY;

    const sigYPDF = page.getHeight() - ((sigY + sigHeightCSS) * scaleY) + yOffsetCorrection;

    // Draw on PDF
    page.drawImage(img, {
        x: sigXPDF,
        y: sigYPDF,
        width: sigWidthPDF,
        height: sigHeightPDF,
    });

    // Save PDF
    const pdfBytesSigned = await pdfDoc.save();
    const blob = new Blob([pdfBytesSigned], { type: 'application/pdf' });

    // Upload to server
    const formData = new FormData();
    formData.append('pdf', blob, 'signed-report.pdf');
    formData.append('id', this.selected.qr);
    formData.append('option', 'report');

    this.$inertia.post('/testreports', formData, {
        preserveScroll: true,
        forceFormData: true,
        onSuccess: () => this.hide?.(),
        onError: () => {
        this.errors = this.$page.props.errors;
        }
    });
    }



  }
};
</script>
