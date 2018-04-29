<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    remove(id,name) {
      this.$swal({
        title: `ต้องการลบข้อมูลการชำระของห้อง ${name} หรือไม่?`,
        icon: "warning",
        buttons: true,
        dangerMode: true
      }).then(willDelete => {
        if (willDelete) {
          axios
            .get(`/invoice/delete/${id}`)
            .then(function(response) {
              window.location.replace("/invoice/index");
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
