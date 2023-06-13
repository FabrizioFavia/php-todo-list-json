const { createApp } = Vue;

createApp({
    data() {
        return {
            APIurl: "API.php",
            lista: [],
            selectedTask: null,
        }
    },
    methods: {
        callApi(){
          axios.get(this.APIurl).then((risposta) => {
            this.lista = risposta.data;
            console.log(risposta.data)
        })
        },
        changeTaskState(task){
            task.done = !task.done 
        },
    },
    mounted() {
      
    }
}).mount('#app')
