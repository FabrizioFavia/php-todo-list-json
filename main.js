const { createApp } = Vue;

createApp({
    data() {
        return {
            task: "ciao",
            APIurl: "API.php",
            lista: [],
            listaMounted: [],
        }
    },
    methods: {
        callApi(){
          axios.get(this.APIurl).then((risposta) => {
            this.lista = risposta.data;
            console.log(risposta.data)
        })
        }
    },
    mounted() {
      console.log(this.task),
      axios.get(this.APIurl).then((risposta) => {
        this.listaMounted = risposta.data;
        console.log("Risposta al mounted", risposta.data)
    })
      
    }
}).mount('#app')
