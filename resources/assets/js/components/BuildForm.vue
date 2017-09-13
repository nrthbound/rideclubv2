<template>
    <div class="columns">
        <div class="column is-half is-offset-one-quarter">
            <div class="form-row">
                <div class="form-box">
                    <div class="box-title has-icon no-title">
                        <div class="form-icon has-shadow" v-bind:class="{ 'is-validated': buildName.length >= 4 }">
                            <i class="material-icons">done</i>
                        </div>
                    </div>
                    <label for="build-name" class="is-sr">Build Name</label>
                    <input type="text" name="build-name" v-model="buildName" id="build-name" class="descriptor has-shadow" placeholder="Build Name" value="">
                </div>
            </div>

            <div class="form-row">
                <div class="form-box has-shadow">
                    <div class="box-title has-icon">
                        <div class="form-icon has-shadow" v-bind:class="{ 'is-validated': buildType }">
                            <i class="material-icons">done</i>
                        </div>
                        What type of build is this?
                    </div>

                    <div class="box-body">
                        <div class="columns">
                            <div class="column">
                                <input class="fancy" v-model="buildType" id="skateboard" type="radio" name="buildType" value="skateboard">
                                <label class="fancy" for="skateboard">Skateboard</label>
                            </div>

                            <div class="column">
                                <input class="fancy" v-model="buildType" id="bike" type="radio" name="buildType" value="bike">
                                <label class="fancy" for="bike">Bike</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-box has-shadow">
                    <div class="box-body">
                        <div class="columns">
                            <div class="column">
                                <button type="button" class="button is-primary" v-bind:class="{ 'is-loading': saved }" @click.prevent="store" name="button">Save</button>
                            </div>
                        </div>
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
                'buildName': '',
                'buildType': '',
                'saved': false,
            }
        },

        created() {
            // TODO: If this was in Edit mode, populate the data properties
            // on success of Axios request
        },

        mounted() {
            
        },

        methods: {
            store() {
                let that = this;
                this.clicked = true;

                axios.post('/builds', {
                    buildName: this.buildName,
                    buildType: this.buildType
                  })
                  .then(function (response) {
                    console.log(response);
                    that.clicked = false;
                  })
                  .catch(function (error) {
                      that.clicked = false;
                      for( let err in error.response.data.errors )
                      {
                          console.log(error.response.data.errors[err]);
                      }
                  });
            }
        }
    }


</script>

<style lang="css">
</style>
