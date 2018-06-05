const Utils = {}
Utils.install = function(Vue) {
    // register some global plugins

    // smooth scroll
    Vue.prototype.scrollTo = function(target) {
        document.querySelector(target).scrollIntoView({
            behavior: 'smooth'
        });
    }
}


export {Utils}
