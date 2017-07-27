new Vue({
    el: '#app',
    ready: function() {
        var self = this
        window.addEventListener('click', function(e){
            if (! e.target.parentNode.classList.contains('toggle')) {
                self.close()
            }
        }, false)
    },

    data: {
        dropDowns: {
            submenu: { open: false }  
        }
    },

    methods: {
        toggle: function(dropdownName) {
            this.dropDowns[dropdownName].open = !this.dropDowns[dropdownName].open;
        },

        close: function() {
            for (dd in this.dropDowns) {
                this.dropDowns[dd].open = false;    
            }
        }
    }
});