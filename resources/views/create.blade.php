@extends('layouts.index')

@section('content')

<p>本文(ページごとに変えたい)</p>
<p>これはクリエイトのページです</p>

<div id="app">
    @{{message}}
</div>

<script>
    const appdata = {
        data() {
            return {
                message: 'メッセージを表示。'
            }
        }
    }

    Vue.createApp(appdata).mount('#app')
</script>

<div id="counter">
    Counter: @{{ counter }}
</div>

<script>
    const Counter = {
        data() {
            return {
                counter: 0
            }
        },
        mounted() {
            setInterval(() => {
                this.counter++
            }, 1000)
        }

    }

    Vue.createApp(Counter).mount('#counter')
</script>

<div id="bind-attribute" class="demo">
    <span v-bind:title="message">
        Hover your mouse over me for a few seconds to see my dynamically bound
        title!
    </span>
</div>

<script>
    const AttributeBinding = {
        data() {
            return {
                message: 'You loaded this page on ' + new Date().toLocaleString()
            }
        }
    }

    Vue.createApp(AttributeBinding).mount('#bind-attribute')
</script>

<div id="event-handling" class="demo2">
    <p>@{{ message }}</p>
    <button v-on:click="reverseMessage">Reverse Message</button>
</div>

<script>
    const EventHandling = {
        data() {
            return {
                message: 'Hello Vue.js!'
            }
        },
        methods: {
            reverseMessage() {
                this.message = this.message
                    .split('')
                    .reverse()
                    .join('')
            }
        }
    }

    Vue.createApp(EventHandling).mount('#event-handling')
</script>

<div id="demo3">
    <button @click="show = !show">
        Toggle render
    </button>

    <transition name="slide-fade">
        <p v-if="show" class="show">hello</p>
    </transition>
</div>
<script>
    const Demo = {
        data() {
            return {
                show: true
            }
        }
    }

    Vue.createApp(Demo).mount('#demo3')
</script>

<div id="flip-list-demo">
    <button @click="shuffle">Shuffle</button>
    <transition-group name="flip-list">
        <li v-for="item in items" :key="item">
            @{{ item }}
        </li>
    </transition-group>
</div>

<script>
    const demo = {
        data() {
            return {
                items: [1, 2, 3, 4, 5]
            }
        },
        methods: {
            shuffle() {
                this.items = _.shuffle(this.items)
            }
        }
    }

    Vue.createApp(demo).mount('#flip-list-demo')
</script>

<div id="array-rendering">
    <li v-for="item in items">
        @{{ item.message }}
    </li>
</div>

<script>
    Vue.createApp({
        data() {
            return {
                items: [{
                    message: 'Foo'
                }, {
                    message: 'Bar'
                }]
            }
        }
    }).mount('#array-rendering')
</script>
@endsection