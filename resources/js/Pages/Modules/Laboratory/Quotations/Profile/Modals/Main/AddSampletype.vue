<template>
    <b-modal v-model="showModal" style="--vz-modal-width: 600px;" header-class="p-3 bg-light" title="Add Sample Type" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <form class="customform">
            <BRow> 
                <BCol lg="12" class="mt-1 mb-3">
                    <div class="d-flex">
                        <div style="width: 100%;">
                            <InputLabel for="conforme" value="Sample Type" :message="form.errors.conforme"/>
                            <Multiselect 
                            :options="names" object
                             @search-change="fetchSampletypes"
                            v-model="form.name"
                            @input="handleInput('name')"
                            :searchable="true" label="name"
                            placeholder="Select Sampletype"/>
                        </div>
                        <div class="flex-shrink-0">
                            <b-button @click="openAdd()" style="margin-top: 20px;" variant="light" class="waves-effect waves-light ms-1"><i class="ri-add-circle-fill"></i></b-button>
                        </div>
                    </div>
                </BCol>
               <BCol lg="12" v-if="form.name">
                    <BRow v-if="form.name?.subs?.length > 0">
                        <BCol md="6" v-for="(chunk, i) in subsChunks" :key="i">
                            <b-list-group >
                                <b-list-group-item v-for="(list, index) in chunk" :key="index">{{ list.name }}</b-list-group-item>
                            </b-list-group>
                        </BCol>
                    </BRow>
                </BCol>
            </BRow>     
        </form>       
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Cancel</b-button>
            <b-button @click="submit('ok')" variant="primary" :disabled="form.processing" block>Submit</b-button>
        </template>
    </b-modal>
    <Add @success="updateData" ref="add"/>
</template>
<script>
import Add from './AddName.vue';
import { useForm } from '@inertiajs/vue3';
import Multiselect from "@vueform/multiselect";
import InputLabel from '@/Shared/Components/Forms/InputLabel.vue';
import TextInput from '@/Shared/Components/Forms/TextInput.vue';
export default {
    components: { InputLabel, TextInput, Multiselect, Add },
    data(){
        return {
            currentUrl: window.location.origin,
            form: useForm({
                name: null,
                name_id: null,
                laboratory_id: null,
                subs: [],
                option: 'sampletype'
            }),
            names: [],
            showModal: false
        }
    },
    computed: {
        subsChunks() {
            if (!this.form.name?.subs) return [[], []]
            const half = Math.ceil(this.form.name.subs.length / 2)
            return [
                this.form.name.subs.slice(0, half),
                this.form.name.subs.slice(half)
            ]
        }
    },
    methods: { 
        show(laboratory){
            this.form.reset();
            this.names = [];
            this.form.laboratory_id = laboratory;
            this.showModal = true;
        },
        submit(){
            this.form.name_id = this.form.name.value;
            this.form.post('/samples',{
                preserveScroll: true,
                onSuccess: (response) => {
                    (!this.form.name) ? '' : this.$emit('selected',response.props.flash.data);
                    this.hide();
                },
            });
        },
        openAdd(){
            this.$refs.add.show(this.form.name);
        },
        fetchSampletypes(code){
            axios.get('/samples',{
                params: {
                    option: 'sampletypes',
                    keyword: code
                }
            })
            .then(response => {
                this.names = response.data;
            })
            .catch(err => console.log(err));
        },
        updateData(data){
            if(!this.form.name){
                this.names.push({
                    value: data.id,
                    name: data.name,
                    subs: data.subs
                });
                this.form.name = {
                    value: data.id,
                    name: data.name,
                    subs: data.subs
                };
            }else{
                this.form.subs.push({
                    value: data.id,
                    name: data.name,
                    subs: data.subs
                });
            }
        },
        handleInput(field) {
            this.form.errors[field] = false;
        },
        hide(){
            this.form.name = null;
            this.showModal = false;
        }
    }
}
</script>