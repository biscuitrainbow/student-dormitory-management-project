<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    remove(id,name) {
      this.$swal({
        title: `ต้องการลบสัญญาของ ${name} หรือไม่?`,
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
