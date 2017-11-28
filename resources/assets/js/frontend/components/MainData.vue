<template>
    <div>
      <h1>Main data</h1>

      <form @submit.prevent="updateData()">
          <div class="form-group" >
              <label class="control-label" for="name">Site Name</label>
              <input type="text" class="form-control" id="site_name" v-model="main_data.site_name">              
          </div>
          <!--
          <div class="form-group" :class="{ 'has-error' : errors.email}">
              <label class="control-label" for="email">Google Analytics Script</label>
              <input type="email" class="form-control" id="ga_script" v-model="ga_script">              
          </div>
          <div class="form-group" :class="{ 'has-error' : errors.keywords}">
              <label class="control-label" for="email">Keywords</label>
              <input type="email" class="form-control" id="keywords" v-model="keywords">              
          </div>
          <div class="form-group" :class="{ 'has-error' : errors.description}">
              <label class="control-label" for="email">Description</label>
              <input type="email" class="form-control" id="description" v-model="description">              
          </div>
          <div class="form-group" :class="{ 'has-error' : errors.title}">
              <label class="control-label" for="email">Title</label>
              <input type="email" class="form-control" id="title" v-model="title">              
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>              
          </div>
          -->
      </form>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: 'app',
        mounted() {
            console.log('Main data mounted.')
        },
        data: function () {
            return {post: {title: '', body: ''}}
        },
        created: function(){
            let uri = '/dashboard/index_data';
            axios.get(uri).then((response) => {
                this.main_data = response.data;
                console.log(this.main_data);
            });
        },
        methods: {
          updateData() {                
          }
        }               
    }
</script>