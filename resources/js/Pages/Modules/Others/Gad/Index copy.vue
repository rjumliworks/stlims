<template lang="">
    <Head title="Target vs Accomplishment"/>
    <div class="auth-page-wrapper d-flex min-vh-100">
        <div class="auth-page-content" style="background-color: #a88cd3;">
            <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
                <div class="file-manager-content w-100 p-4 pb-0" ref="box">
                     
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    layout: null,
    data(){
        return {
           
        }
    },
    methods: {
      
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
  min-width: 24%;
  max-width: 24%;
  height: calc(100vh - 92px);
}
</style>
