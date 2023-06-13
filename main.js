const { createApp } = Vue;

createApp({
    data() {
        return {
            APIurl: "API.php",
            
            lista: [],
            selectedTask: null,
            task: "",
                
            
        }
    },
    methods: {
        callApi() {
            axios.get(this.APIurl).then((risposta) => {
                this.lista = risposta.data;
                console.log(risposta.data)
            })
        },
        changeTaskState(task) {
            task.done = !task.done
        },
        addTask() {
            const data = new FormData();
            data.append('task', this.task);
            data.append('done', false);
            console.log(data)

            axios.post(this.APIurl,  data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((risposta) => {
                this.lista = risposta.data;

                this.task = "";
            })
        }
    },
    mounted() {

    }
}).mount('#app')
