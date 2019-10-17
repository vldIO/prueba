var alum = new Vue({
    el: '#alum',
    data: {
      alumnos: []
    },
    mounted() {
      this.getAlumnos()
    },
    methods: {
      async getAlumnos(){
        let res = await axios.get("api/respuesta")
        this.alumnos = res.data
        console.log(this.alumnos)
      },async getAlumnos(){
        let res = await axios.get("api/respuesta")
        this.alumnos = res.data
        console.log(this.alumnos)
      },
    }
  })
