<template>
	<div class="row">
		<div class="col-12">
			<h1>Posts</h1>
			<br>
			<br>
			<router-link to="/posts/create" class="btn btn-success">Create Post</router-link> 
			<br>
			<br>
			<div v-if="posts.total > 0">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>Category ID</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="post in posts.data">
							<td>{{ post.id }}</td>
							<td>{{ post.title }}</td>
							<td>{{ post.category_id }}</td>
							
						</tr>
					</tbody>
				</table>

			<pagination :data="posts" @pagination-change-page="getPosts"></pagination>
			</div>
			<div v-else>
				<br>
				<br>
				<h1>No Posts</h1>
			</div>
		</div>
	</div>
</template>
<script>
	export default {
        data() {
            return {
                posts: {}
            }
        },
        mounted() {
            this.getPosts()
		},
		methods: {
			getPosts(page = 1) {
				axios.get("api/posts?page=" + page)
            		.then(response => {
						console.log(response.data)
						this.posts = response.data
					})
			}
		}
    }

</script>