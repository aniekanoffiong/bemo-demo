<template>
    <form @submit.prevent="handleSubmit" class="row">
        <div class="col-md-6 form-group">
            <label class="form-label" for="title">Title</label>
            <input type="text" name="title" id="title" placeholder=""
            class="form-control" pattern=".*\S.*" v-model="pageForm.title">
        </div>
        <div class="col-md-6 form-group">
            <label class="form-label" for="featured">Update Featured Image</label>
            <input type="file" name="featured" id="featured"
            accept="image/*" @change="filesChange($event.target.files)">
        </div>
        <div class="col-12 form-group">
            <label class="form-label" for="description">Description</label>
            <textarea name="description" id="description" placeholder=""
            class="form-control" rows="5"
            v-model="pageForm.description"></textarea>
        </div>
        <div class="col-12 form-group">
            <div class="form-check">
                <input class="form-check-input" name="search_index" id="search_index"
                type="checkbox" v-model="pageForm.search_index">
                <label class="form-check-label" for="search_index">
                    Enable Page Search Index
                </label>
            </div>
        </div>
        <div class="col-12 form-group">
            <label class="form-label">Page Content</label>
            <vue-editor v-model="pageForm.content"></vue-editor>
        </div>
        <div class="col-12">
            <button class="btn btn-info text-white btn-main">
                SAVE
            </button>
        </div>
    </form>
</template>

<script>
import { VueEditor } from "vue2-editor"
import api from '../services/api'

export default {
    name: "HomeForm",
    props: ['type'],
    components: {
        VueEditor
    },
    data() {
        return {
            pageForm: {
                type: 'welcome',
                title: '',
                description: '',
                search_index: '',
                content: '',
                featured: {}
            },
        }
    },
    mounted() {
        this.loadData()
    },
    methods: {
        handleSubmit() {
            const formData = new FormData();
            formData.append('type', this.type)
            formData.append('title', this.pageForm.title)
            formData.append('description', this.pageForm.description)
            formData.append('search_index', this.pageForm.search_index)
            formData.append('content', this.pageForm.content)
            if (! _.isEmpty(this.pageForm.featured)) {
                formData.append('featured', this.pageForm.featured)
            }
            api('/save-content', formData, 'post')
        },
        filesChange(fileList) {
            this.featured = fileList[0]
        },
        loadData() {
            api(`/page-data/${this.type}`)
            .then((data) => {
                this.pageForm = data.data.data
            })
        },
        toggle(type) {
            this.pageForm.type = type
        }
    },
    watch: {
        type: function(val) {
            this.loadData()
        }
    }
}
</script>
