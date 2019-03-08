<template>
	<div class="row">
		<div class="col-md-12">
			<br>
			<br>
			<h1>Post Create</h1>
			<form method="post" v-on:submit.prevent="createPost">
				<div class="form-group">
					<label for="name">Title :</label>
					<input v-model="title" name="title" type="text" class="form-control" id="post_title" placeholder="Post title" value="">
					<small v-if="validationErrors.title" class="form-text text-danger">
						{{ validationErrors.title[0] }}
					</small>
				</div>
				<div class="form-group">
					<label for="name">Category ID :</label>
					<input v-model="category_id" name="category_id" type="text" class="form-control" id="post_category" placeholder="Category ID" value="">
					<small v-if="validationErrors.category_id" class="form-text text-danger">
						{{ validationErrors.category_id[0] }}
					</small>
				</div>
				<div class="form-group">
					<label for="body">Post Body</label>
					<textarea v-model="body" name="body" class="form-control" id="post_body" rows="5" placeholder="Post Body"></textarea>

					<small v-if="validationErrors.body" class="form-text text-danger">
						{{ validationErrors.body[0] }}
					</small>
				</div>
				
				<button class="btn btn-success">Create</button>

			</form>
		</div>
	</div>
</template>
<script>
	export default {
		data() {
			return {
				title: "",
				category_id: "",
				body: "",
				validationErrors: []
			}
		},
		methods: {
			createPost: function() {
				var that = this
				axios.post('/api/posts/create', {
					title: this.title,
					category_id: this.category_id,
					body: this.body
				})
				.then( response => this.$router.push({name: "post-index"}))
				.catch(error => {
					if (error.response.status == 422){
						this.validationErrors = error.response.data.errors;
					}
				});
			}
		}

	}
</script>










