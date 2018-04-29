<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    remove(id,name) {
      this.$swal({
        title: `ต้องการลบห้อง ${name} หรือไม่?`,
        icon: "warning",
        buttons: true,
        dangerMode: true
      }).then(willDelete => {
        if (willDelete) {
          axios
            .get(`/room/delete/${id}`)
            .then(function(response) {
              window.location.replace("/room/index");
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
