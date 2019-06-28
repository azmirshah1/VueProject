<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>
                    <div class="card-body">
                        Page 2. {{ data }}

                        <table class="table table-hover table-bordered">
                          <thead>
                            <tr>
                              <th width="1%">No</th>
                              <th>Name</th>

                            </tr>
                          </thead>
                          <tbody v-if="datas.length" class="data-ada">
                              <tr v-for="data, index in datas">

                                  <td>{{ data.id }}</td>
                                  <td>{{ data.nama }} <span v-if="data.id == 2 "> Oke..</span></td>
                                </tr>
                            </tbody>
                            <tbody class="data-tidak-ada" v-else>
                              <tr ><td colspan="2"  class="text-center">Tidak Ada Data</td></tr>
                          </tbody>
                        </table>
                        Number 1:
                        <input type="text" name="name" v-model="value_one" />
                        Number 2:
                        <input type="text" name="alamat" v-model="value_two" />

                        <!-- total -->
                        <button type="submit" name="add" v-on:click ="tambah()" > + </button>
                        <button type="submit" name="sub" v-on:click ="tolak()" > - </button>
                        <button type="submit" name="devide" v-on:click ="bahagi()" > / </button>
                        <button type="submit" name="time" v-on:click ="darab()" > x </button>
                        <p>Total is: {{ total }}</p>
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
