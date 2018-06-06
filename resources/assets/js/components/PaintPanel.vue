<template>
    <div class="ui vertical stripe segment">

        <div class="ui middle aligned stackable grid container">
            <div class="row">
                <div class="four wide right floated column">
                    <div class="item">
                        <h2 class="ui header">
                            <i class="tiny paint brush icon"></i>
                            請畫出：{{goal}}
                        </h2>
                        <h3 v-text="status"></h3>
                        <p v-text="message"></p>
                        <div class="ui hidden divider"></div>
                    </div>
                </div>
                <div class="ten wide column center aligned">

                    <div class="ui  container">
                        <canvas id="panel" width="280" height="280" style="border:2px solid #6699cc"></canvas>
                        <div class="ui horizontal divider">Then</div>
                        <div class="ui buttons">
                            <button class="ui button" @click="clearAndReset">Reset</button>
                            <div class="or"></div>
                            <button class="ui positive button" @click="send">Submit</button>
                        </div>
                    </div>

                    <div :class="['ui', 'inverted', 'dimmer', {'active': isDimmed}]">
                        <div class="ui loader"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        props: {

        },

        data() {
            return {
                canvas : {},
                ctx : {},
                isDimmed : false,
                status : '',
                message : '',
                goal : 0
            };
        },

        computed: {

        },

        methods: {
            clearAndReset() {
                // Uclear the paint panel
                this.ctx.setTransform(1, 0, 0, 1, 0, 0);
                this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
                this.ctx.fillStyle = 'white';
                this.ctx.fillRect(0, 0, this.canvas.width, this.canvas.height);
                this.resetGoal();
            },

            send() {
                // post image to server
                let data = {
                    q : this.goal,
                    image : ''
                };
                data.image = this.canvas.toDataURL("image/png");
                this.toggleDimmer();
                var self = this;
                axios.post('handwrite', data)
                     .then( response => {
                         self.toggleDimmer();
                         if (response.data.success) {
                             self.status = '你太棒了！';
                             self.message = 'Good Job!';
                         } else {
                             self.status = '你的字太醜了';
                             self.message = 'We can\'t verify your painting, please try again.';
                         }
                         console.log(response.data);
                     })
                     .catch( error => {
                         console.log(error);
                         self.status = '發生錯誤';
                         self.message = '';
                         self.toggleDimmer();
                     })
            },

            // dim the canvas
            toggleDimmer() {
                this.isDimmed = !this.isDimmed;
            },

            // fetch a new number and assign to goal
            resetGoal() {
                var self = this;
                self.status = '';
                self.message = '';
                axios.get('handwrite')
                     .then( response => {
                         self.goal = response.data.goal;
                     })
                     .catch( error => {
                         self.status = '發生錯誤';
                         self.message = '';
                     });
            }
        },

        created() {
            this.resetGoal();
        },

        mounted() {
            this.$nextTick( function () {

                // bind html elements to vue data obj
                var canvas = document.querySelector('canvas');
                this.canvas = canvas;

                var ctx = canvas.getContext("2d");
                this.ctx = ctx;

                var mousePressed = false;
                var lastX, lastY;

                ctx.strokeStyle = 'black';
                // stroke width
                ctx.lineWidth = 15;
                ctx.lineJoin = 'round';

                ctx.fillStyle = 'white';
                ctx.fillRect(0, 0, canvas.width, canvas.height);

                $(canvas).mousedown(function (e) {
                    mousePressed = true;
                    draw(e.pageX - $(this).offset().left, e.pageY - $(this).offset().top, false);
                });

                $(canvas).mousemove(function (e) {
                    if (mousePressed) {
                        draw(e.pageX - $(this).offset().left, e.pageY - $(this).offset().top, true);
                    }
                });

                $(canvas).mouseup(function (e) {
                    mousePressed = false;
                });
                $(canvas).mouseleave(function (e) {
                    mousePressed = false;
                });

                function draw(x, y, isDown) {
                    if (isDown) {
                        ctx.beginPath();
                        ctx.moveTo(lastX, lastY);
                        ctx.lineTo(x, y);
                        ctx.closePath();
                        ctx.stroke();
                    }
                    lastX = x;
                    lastY = y;
                }

            });

        }
    }
</script>

<style lang="scss">
    #panel-dimmer {
        width: 100%;
        height: 150%;
        z-index: 9999;
        top: 0;
        left: 0;
        position: absolute;
        background-color: rgba(0,0,0,0.5);
        border-radius: 0.3em;
        text-align: center;
        font-size: 2em;
        font-weight: bold;
        color: white;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
