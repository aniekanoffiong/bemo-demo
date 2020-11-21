<template>
    <div class="col-md-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">SITE WIDE CONFIG EDITOR</div>
                    <div class="card-body">
                        <form @submit.prevent="handleSubmit" class="row">
                            <div class="col-md-12 form-group">
                                <label class="form-label" for="title">Contact Form Email</label>
                                <input type="text" name="contact_email" id="contact_email" placeholder=""
                                class="form-control" pattern=".*\S.*" v-model="configForm.contact_email">
                            </div>
                            <div class="col-12 form-group">
                                <label class="form-label" for="google_analytics">Google Analytics Code</label>
                                <textarea name="google_analytics" id="google_analytics" placeholder=""
                                class="form-control" rows="5"
                                v-model="configForm.google_analytics"></textarea>
                            </div>
                            <div class="col-12 form-group">
                                <label class="form-label" for="facebook_ad">Facebook Pixel Code</label>
                                <textarea name="facebook_ad" id="facebook_ad" placeholder=""
                                class="form-control" rows="5"
                                v-model="configForm.facebook_ad"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-info text-white btn-main">
                                    SAVE
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'ConfigEditor',
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                configForm: {
                    contact_email: '',
                    google_analytics: '',
                    facebook_ad: '',
                },
            }
        },
        mounted() {

        },
        methods: {
            handleSubmit() {
                api('/save-config', this.configForm, 'post')
            },
        }
    }
</script>
