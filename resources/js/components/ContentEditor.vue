<template>
    <div class="col-md-7">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">CONTENT EDITOR</div>
                    <div class="card-body">
                        <div class="item-nav">
                            <div class="row justify-content-center">
                                <div :class="{'active': type === 'welcome'}" 
                                    class="item-nav-item"
                                    @click="toggle('welcome')">
                                    Welcome Page
                                    <hr class="active-tab-underline" />
                                </div>
                                <div :class="{'active': type === 'contact'}" 
                                    class="item-nav-item"
                                    @click="toggle('contact')">
                                    Contact Page
                                    <hr class="active-tab-underline" />
                                </div>
                            </div>
                        </div>
                        <div class="profile-tab-content">
                            <ContentForm :type="type" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ContentForm from "./ContentForm"
import api from '../services/api'

export default {
    name: 'ContentEditor',
    components: {
        ContentForm
    },
    data() {
        return {
            type: 'welcome',
        }
    },
    methods: {
        toggle(type) {
            this.type = type
        },
    },
}
</script>

<style>
.active-tab-underline {
    display: none;
}
div.active .active-tab-underline {
    display: block;
    border-bottom: 1px solid #22e2e2;
}
.item-nav-item {
    font-size: 18px!important;
    padding: 20px;
    cursor: pointer;
}
</style>