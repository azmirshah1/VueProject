<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>
                    <div class="card-body">
                        Page - Index. {{ data }}
                        <router-link :to="{name: 'page1'}" >Page 1</router-link>
                        <router-link :to="{name: 'page2'}" >Page 2</router-link>
                        <router-view class="view"> </router-view>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data: function () {
            return {
              data : 'New Project',

              datas : [
                    {id : 1, nama : 'Sohib Abdul Karim'},
                    {id : 2, nama : 'Mohamad Fahmi'},
              ],
              value_one:0,
              value_two: 0,
              total:0,

            }
        },

        mounted() {
            var app = this;
            // app.tolak();
        },

        watch: {
            value_one: function (q) {
                this.tolak()
            }
        },
        methods: {
            tambah() {
            var app = this;
            app.total = parseFloat(app.value_one) + parseFloat(app.value_two);
             },

            tolak() {
            var app = this;
            app.total = parseFloat(app.value_one) - parseFloat(app.value_two);
             },

            bahagi() {
            var app = this;
            app.total = parseFloat(app.value_one) / parseFloat(app.value_two);
             },

            darab() {
            var app = this;
            app.total = parseFloat(app.value_one) * parseFloat(app.value_two);
             },
        }
    }

</script>
