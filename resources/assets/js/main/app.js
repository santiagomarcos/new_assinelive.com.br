const app = new Vue({
    el: '#content-header',
        data:{

        },
        methods: {

    },

    el: '#digital_services',
        data:{
            plan_tablet: '',

            obj_ei1:{
                display: 'block'
            }
        },
        methods: {
            c_40mb: function (e) {
                this.plan_tablet = '40mega'
            },
            c_60mb: function (e) {
                this.plan_tablet = '60mega'
            },
            c_100mb: function (e) {
                this.plan_tablet = '100mega'
            },
            c_150mb: function (e) {
                this.plan_tablet = '150mega'
            },
            c_300mb: function (e) {
                this.plan_tablet = '300mega'
            },
            c_500mb: function (e) {
                this.plan_tablet = '500mega'
            },
            c_1gb: function (e) {
                this.plan_tablet = '1giga'
            },
            c_2gb: function (e) {
                this.plan_tablet = '2giga'
            },
    }
});