const app = new Vue({
    el: '#content-header',
        data:{

        },
        methods: {
    },

    el: '#digital_services',
        data:{
            plan_tablet: '60 mega',

            obj_ei1:{
                display: 'block'
            }
        },
        methods: {
            c_40mb: function (e) {
                this.plan_tablet = '40 mega'
            },
            c_60mb: function (e) {
                this.plan_tablet = '60 mega'
            },
            c_100mb: function (e) {
                this.plan_tablet = '100 mega'
            },
            c_150mb: function (e) {
                this.plan_tablet = '150mega'
            },
            c_300mb: function (e) {
                this.plan_tablet = '300 mega'
            },
            c_500mb: function (e) {
                this.plan_tablet = '500 mega'
            },
            c_1gb: function (e) {
                this.plan_tablet = '1 giga'
            },
            c_2gb: function (e) {
                this.plan_tablet = '2 giga'
            },
        }

});