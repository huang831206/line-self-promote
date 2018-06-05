class EventBus {

    // vue: a vue instance

    constructor() {
        this.vue = new Vue()
    }

    // trigger $emit
    trigger(event, data = null) {
        this.vue.$emit(event, data)
    }

    // listen $on
    listen(event, callback) {
        this.vue.$on(event, callback)
    }

}

export {EventBus}
