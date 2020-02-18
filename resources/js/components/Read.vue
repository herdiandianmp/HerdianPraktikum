<template>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-3">
                <select class="form-control select2" id="request_user_status">
                    <option value="" selected>All</option>
                    <option value="internal">Internal</option>
                    <option value="external">External</option>
                </select>
            </div>
            <div class="col-md-9">
                <router-link class="btn btn-primary" to="/create">Tambah</router-link>
            </div>
        </div>
    </div>
    
    <div class="card-body table-responsive pad">
      <table id="serverside" class="table table-bordered table-striped">
          <thead>
              <tr>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Action</th>
              </tr>
          </thead>
          <tbody>
          <!-- menampilkan data ke table -->
          <tr v-for="person in persons" :key="person.id">
            <td style="width:40%">{{person.first_name}}</td>
            <td style="width:40%">{{person.last_name}}</td>
            <td style="width:20%">
              <router-link class="btn btn-warning" :to="'/detail/'+person.id">Update</router-link>
              <button class="btn btn-danger" v-on:click="deleteData(person.id)">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
</div>
</template>

<!-- script js -->
<script>
export default {
  data() {
    return {
      // variable array yang akan menampung hasil fetch dari api
      persons: []
    };
  },
  created() {
    this.loadData();
  },
  methods: {
    loadData() {
      // fetch data dari api menggunakan axios
      axios.get("http://localhost:8000/api/person").then(response => {
        // mengirim data hasil fetch ke varibale array persons
        this.persons = response.data;
      });
    },
    deleteData(id) {
      // delete data
      axios.delete("http://localhost:8000/api/person/" + id).then(response => {
        this.loadData();
      });
    }
  }
};
</script>