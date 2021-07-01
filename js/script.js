new Vue({
    el: '#root',
    data: {
        param: '',
        show: false,
        list: [],
        hostName: 'http://localhost:8888',
    },
    mounted: function(){
        this.getData();
    },
    methods:{
        submit: function(){
            if ( this.param != '') {
                axios.post(this.hostName + '/prova_php/input.php',{ to_do: this.param });
            this.param = '';
            this.getData();
            this.show = true;
            }
            
        },
        getData: function(){
            axios.get(this.hostName + '/prova_php/input.json')
                .then((result) => {
                    this.list = result.data;
                });
        },
        deleteThing: function(index){
            axios.post(this.hostName + '/prova_php/delete.php', index);
            this.list.splice(index,1);
        }
    }
});