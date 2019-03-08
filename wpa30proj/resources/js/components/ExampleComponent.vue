<template>
    <div class="row">
        <div class="col-md-12">
            <br>
            <br>
            <router-link to="/products/create" class="btn btn-success">Create Product</router-link> 
            <br>
            <br>
    
            <br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="student in students">
                        <td>{{ student.id }}</td>
                        <td>{{ student.name }}</td>
                        <td>{{ student.address }}</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                students: []
            }
        },
        mounted() {
            axios.get("api/students")
            .then(response => this.students = response.data)
        }
    }
</script>
