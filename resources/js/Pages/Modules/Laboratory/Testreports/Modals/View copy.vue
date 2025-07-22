<template>
     <!-- style="--vz-modal-width: 1000px;" -->
    <b-modal  v-if="selected" v-model="showModal" style="--vz-modal-width: 700px;" header-class="p-3 bg-light" title="View Report Number" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
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
                            <p class="text-muted mb-0 fs-12">Report Date:</p>
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
        <hr class="text-muted mt-4"/>
        <file-pond
        name="pdf"
        ref="pond"
        allow-multiple="false" 
        max-files="1" 
        accepted-file-types="application/pdf"
        label-idle='Drag & Drop your PDF or <span class="filepond--label-action">Browse</span>'
        :allow-process="false"      
        @addfile="handleAddFile"
        />
        <hr class="text-muted"/>
         <img
        ref="signature"
        src="/images/esig.png"
        id="signature"
        style="position: absolute; width: 100px; cursor: move"
      /><b-button variant="success" block @click="savePdf()">Save Signed PDF</b-button>
        <canvas ref="pdfCanvas" id="pdfcanvas" style="border: 1px solid blue; width: 100%; height: auto;"></canvas>

        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Close</b-button>
            <b-button @click="openResult()" variant="primary" block>Preview</b-button>
        </template>
    </b-modal>
    <Result ref="result"/>
</template>
<script>
import { PDFDocument } from 'pdf-lib';
import { jsPDF } from "jspdf";
import interact from 'interactjs'
import vueFilePond from 'vue-filepond';
import 'filepond/dist/filepond.min.css';
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';
const FilePond = vueFilePond(FilePondPluginFileValidateType);
import simplebar from "simplebar-vue";
import Result from './Result.vue';
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
export default {
    components : { InputLabel, TextInput, simplebar, Result, FilePond }, 
    data(){
        return {
            currentUrl: window.location.origin,
            showModal: false,
            selected: null,
            parameters: [
                {name: null, result: null}
            ],
            fabricCanvas: null,
            scale: 4.0,
             signaturePos: { x: 0, y: 0 }
        }
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
        show(data){
            this.selected = data;
            this.parameters = this.selected.analyses.map(analysis => {
                return { name: analysis.testservice.testname.name, result: null };
            });
            this.showModal = true;
              this.$nextTick(() => {
                this.renderPdf();
                this.makeDraggable();
            });
        },
        printQr(id){
            window.open('/testreports?option=qrcode&id='+this.selected.qr);
        },
        openResult(){
            this.$refs.result.show(this.parameters,this.selected.sample_id);
        },
        handleAddFile(error, fileItem) {
            if (error) {
                console.error('FilePond error:', error)
                return
            }
            const file = fileItem.file
            const formData = new FormData()
            formData.append('pdf', file);
            formData.append('id',this.selected.qr);
            formData.append('option','report');

            this.$inertia.post('/testreports', formData, {
                preserveScroll: true,
                forceFormData: true,
                onSuccess: (response) => {
                this.$emit('update', this.$page.props.flash?.data?.data)
                this.hide?.()
                },
                onError: () => {
                this.errors = this.$page.props.errors
                }
            })
        },
        hide(){
            this.showModal = false;
        },
        renderPdf() {
            const canvasEl = this.$refs.pdfCanvas
            const fileUrl = `/storage/uploads/testreports/${this.selected.attachment.name}`

            // Fix for older PDF.js (window.PDFJS must be available)
            if (window.PDFJS) {
                window.PDFJS.workerSrc = null

                window.PDFJS.getDocument(fileUrl).then((pdf) => {
                pdf.getPage(1).then((page) => {
                    const viewport = page.getViewport(this.scale)
                    canvasEl.width = viewport.width
                    canvasEl.height = viewport.height

                    const context = canvasEl.getContext('2d')
                    page.render({ canvasContext: context, viewport }).then(() => {
                    // Attach fabric canvas to the rendered PDF
                    this.fabricCanvas = new fabric.Canvas(canvasEl)
                    })
                })
                })
            } else {
                console.error('PDFJS not loaded')
            }
        },
        makeDraggable() {
            interact(this.$refs.signature).draggable({
                modifiers: [interact.modifiers.restrictRect({ restriction: 'parent' })],
                listeners: {
                move: (event) => {
                    const target = event.target
                    const x = (parseFloat(target.dataset.x) || 0) + event.dx
                    const y = (parseFloat(target.dataset.y) || 0) + event.dy

                    target.style.transform = `translate(${x}px, ${y}px)`
                    target.dataset.x = x
                    target.dataset.y = y

                    this.signaturePos = { x, y }
                }
                }
            })
        },
        savePdf() {
            const canvas = this.$refs.pdfCanvas;
            const signature = this.$refs.signature;

            // Create merged canvas
            const mergedCanvas = document.createElement("canvas");
            mergedCanvas.width = canvas.width;
            mergedCanvas.height = canvas.height;
            const ctx = mergedCanvas.getContext("2d");

            // Draw base PDF content
            ctx.drawImage(canvas, 0, 0);

            // Compute scale from CSS to canvas
            const scaleX = canvas.width / canvas.offsetWidth;
            const scaleY = canvas.height / canvas.offsetHeight;

            // Signature size and position in canvas units
            const sigWidthCSS = signature.offsetWidth;
            const sigHeightCSS = signature.offsetHeight;
          const canvasRect = canvas.getBoundingClientRect();
const sigRect = signature.getBoundingClientRect();

const sigX = sigRect.left - canvasRect.left;
const sigY = sigRect.top - canvasRect.top;
            const sigXCanvas = sigX * scaleX;
            const sigYCanvas = sigY * scaleY;
            const sigWidthCanvas = sigWidthCSS * scaleX;
            const sigHeightCanvas = sigHeightCSS * scaleY;

            // Draw signature image
            ctx.drawImage(signature, sigXCanvas, sigYCanvas, sigWidthCanvas, sigHeightCanvas);

            // Convert canvas to image
            const imgData = mergedCanvas.toDataURL("image/jpeg", 1.0);

            // A4 size in pt: 595.28 x 841.89 (portrait)
            const pdf = new jsPDF({
                orientation: "portrait",
                unit: "pt",
                format: "a4",
            });

            // Calculate image aspect ratio and scale for A4
            const pageWidth = 595.28;
            const pageHeight = 841.89;
            const imgAspect = mergedCanvas.width / mergedCanvas.height;
            let imgWidth = pageWidth;
            let imgHeight = pageWidth / imgAspect;

            if (imgHeight > pageHeight) {
                imgHeight = pageHeight;
                imgWidth = pageHeight * imgAspect;
            }

            const x = (pageWidth - imgWidth) / 2;
            const y = (pageHeight - imgHeight) / 2;

            // Add image to PDF
            pdf.addImage(imgData, "JPEG", x, y, imgWidth, imgHeight);

            // Convert PDF to Blob and upload
            const blob = pdf.output("blob");

            const formData = new FormData();
            formData.append("pdf", blob, "signed-report.pdf");
            formData.append("id", this.selected.qr);
            formData.append("option", "report");

            this.$inertia.post("/testreports", formData, {
                preserveScroll: true,
                forceFormData: true,
                onSuccess: (response) => {
                    this.$emit("update", this.$page.props.flash?.data?.data);
                    this.hide?.();
                },
                onError: () => {
                    this.errors = this.$page.props.errors;
                },
            });
        },
       
    }
}
</script>