class Information {

    constructor() {
        this.information = {};
        this.dataURL = '/basic_info';
    }

    /**
     * Reload data from server
     *
     * @return Promise
     */
    reload() {
        return new Promise((resolve, reject) => {

            axios.post(this.dataURL)
                .then((response) => {
                    this.reset(response.data);
                    resolve(response.data);
                })
                .catch((error) => {
                    console.log(error);
                    reject();
                });
        });
    }

    /**
     * Reset information data
     *
     * @param Object data
     */
    reset(data){
        if (data) {
            this.information = data;
        }
    }

    /**
     * Get some piece of data by field
     *
     * @param String field
     * @return Object
     */
    get(field) {
        if( this.information.hasOwnProperty(field) ) {
            return inis.information[field];
        } else {
            return null;
        }
    }

    /**
     * retrieve all data
     *
     * @param String field
     * @return Object
     */
    all() {
        return this.information;
    }
}

export {Information}
