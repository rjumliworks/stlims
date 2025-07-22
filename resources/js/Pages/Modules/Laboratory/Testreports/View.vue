<template lang="">

    <Head title="View Report" />
    <div class="auth-page-wrapper d-flex min-vh-100">
        <div class="auth-page-content">
            <b-col lg="12">
                <b-card no-body>
                    <div class="bg-info-subtle">
                        <b-card-body class="pb-0 px-4">
                            <b-row class="mb-3">
                                <b-col md>
                                    <b-row class="align-items-center g-3">
                                        <b-col md>
                                            <div>
                                                <h4 class="fw-semibold text-primary">{{(selected.code) ? selected.code+' - ' : ''}}</h4>
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
                                        </b-col>
                                    </b-row>
                                </b-col>
                                <b-col md="auto">
                                    <div class="hstack gap-4 flex-wrap mt-2">
                                        
                                        <div>  
                                            <b-button variant="primary" block><i class="ri-printer-fill me-1"></i> Print</b-button>
                                        </div>
                                    </div>
                                </b-col>
                            </b-row>
                            
                        </b-card-body>
                    </div>
                </b-card>
            </b-col>
            <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
                <div class="file-manager-content w-100 p-4 pb-0" ref="box" style="margin-left: 20px;">
                    <div class="row g-2">
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
                </div>
                <div class="file-manager-sidebar" style="margin-right: 20px;">
                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation example" class="float-end">
                                <ul class="pagination">
                                    <li
                                    class="page-item"
                                    :class="{ disabled: currentPage === 1 }"
                                    @click="goToPage(currentPage - 1)"
                                    >
                                    <a class="page-link" href="#">Previous</a>
                                    </li>
                                    <li
                                    v-for="page in totalPages"
                                    :key="page"
                                    class="page-item"
                                    :class="{ active: page === currentPage }"
                                    @click="goToPage(page)"
                                    >
                                    <a class="page-link" href="#">{{ page }}</a>
                                    </li>
                                    <li
                                    class="page-item"
                                    :class="{ disabled: currentPage === totalPages }"
                                    @click="goToPage(currentPage + 1)"
                                    >
                                    <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                            <canvas ref="pdfCanvas" id="pdfcanvas" style="border: 1px solid blue; width: 100%; height: auto;"></canvas>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>
<script>
import { PDFDocument } from 'pdf-lib';
import interact from 'interactjs';
import vueFilePond from 'vue-filepond';
import 'filepond/dist/filepond.min.css';
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';
const FilePond = vueFilePond(FilePondPluginFileValidateType);
import simplebar from "simplebar-vue";
import PageHeader from '@/Shared/Components/PageHeader.vue';
    export default {
        layout: null,
        props: ['testreport'],
        components: {
            PageHeader,
            simplebar,
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
        data(){
            return {
                selected: this.testreport.data,
                parameters: [{ name: null, result: null }],
                scale: 4.0,
                signaturePos: { x: 0, y: 0 },
                pdfUrl: null,
                pdfDoc: null,
                currentPage: 1,
                totalPages: 0,
            }
        },
        mounted() {
            this.renderPdf();
            this.makeDraggable();
        },
        methods: { 
            renderPdf(pageNum = 1) {
                this.pdfUrl = `/storage/uploads/testreports/${this.selected.attachment.name}`;
                const canvasEl = this.$refs.pdfCanvas;
                const fileUrl = this.pdfUrl;
               
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
            goToPage(page) {
                this.currentPage = page;
                this.renderPdf(page);
            },
        }
    }
</script>
<style scoped>
    .auth-page-wrapper .auth-page-content {
        padding-bottom: 0px;
        width: 100%;
        overflow: hidden;
        background-color: #f3f3f9;
    }

    .file-manager-sidebar {
        min-width: 50%;
        max-width: 50%;
        height: calc(100vh - 92px);
    }

    .overlay-cancelled {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4);
        /* dark transparent background */
        box-sizing: border-box;
        z-index: 9999;
        pointer-events: none;
    }

    .overlay-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(-10deg);
        /* tilt the text */
        color: red;
        font-size: 3rem;
        font-weight: 600;
        border: 8px solid red;
        padding: 0.5rem 2.5rem;
        border-radius: 15px;

        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .cancelled-wrapper {
        pointer-events: none;
    }

</style>
