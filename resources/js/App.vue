<template>
    <div class="container">
        <div class="row">
            <ContentEditor />
            <ConfigEditor />
        </div>
    </div>
</template>

<script>
import ContentEditor from './components/ContentEditor'
import ConfigEditor from './components/ConfigEditor'

export default {
	components: {
		ContentEditor,
		ConfigEditor
	},
}
</script>

<style>
	.card-header {
		background: #ffffff;
		font-size: 22px;
		border-bottom: none;
		font-weight: bolder;
	}
</style>
