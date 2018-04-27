<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    remove(id) {
      this.$swal({
        title: "Are you sure?",
        icon: "warning",
        buttons: true,
        dangerMode: true
      }).then(willDelete => {
        if (willDelete) {
          axios
            .get(`/contract/delete/${id}`)
            .then(function(response) {
              window.location.replace("/contract/index");
            })
            .catch(function(error) {
              console.log(error);
            });
        }
      });
    }
  }
};
</script>
