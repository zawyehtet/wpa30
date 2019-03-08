<template>
	<div class="row">
		<div class="col-12">
			<form method="post">
			<div class="form-group">
				<label for="name">Name :</label>
				<input v-model="name" name="name" type="text" class="form-control" id="student_name" placeholder="You Name" value="">
        <small v-if="validationErrors.name" class="form-text text-danger">
            {{ validationErrors.name[0] }}
        </small>
  
			</div>
			<div class="form-group">
				<label for="address">Example textarea</label>
				<textarea v-model="address" name="address" class="form-control" id="student_address" rows="3" placeholder="You address"></textarea>
				
					<small v-if="validationErrors.address" class="form-text text-danger">
            {{ validationErrors.address[0] }}
          </small>
			</div>
			<button @click.prevent="createStudent()" type="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
	</div>
</template>
<script>
    export default {
    	data() {
    		return {
    			name: "",
    			address: "",
          validationErrors: []
    		}
    	},
    	mounted() {

    	},
    	methods: {
    		createStudent: function() {
          var that = this
          axios.post('/api/students/create', {
            name: this.name,
            address: this.address
          })
          .then( response => this.$router.push({name: "example-component"}))
          .catch(function (error) {
            console.log("ERROR")
            if (error.response.status == 422){
              that.validationErrors = error.response.data.errors;
            }
          });

          
        

    		}
    	}

    }
</script>







