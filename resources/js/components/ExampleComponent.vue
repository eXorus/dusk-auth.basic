<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <ul>
                            <li>Protected API: {{ protected }}</li>
                            <li>Public API: {{ public }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {


        data() {
            return {
                protected: 'No',
                public: 'No',
            }
        },

        mounted() {
            console.log('Component mounted.')

            axios.get('/api/protected').then(function(response) {
                this.protected = response.data
            }.bind(this));

            axios.get('/api/public').then(function(response) {
                this.public = response.data
            }.bind(this));
        }
    }
</script>
