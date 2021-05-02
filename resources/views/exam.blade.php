<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @livewire('test')
    </div>
    <script>
        window.MathJax = {
            tex: {
                inlineMath: [
                    ['$', '$'],
                    ['\\(', '\\)']
                ]
            },
            svg: {
                fontCache: 'global'
            }
        };

        (function() {
            var script = document.createElement('script');
            script.src = 'https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-svg.js';
            script.async = true;
            document.head.appendChild(script);
        })();

        function updateHeight(){
            if(!document.getElementById('parent')) {
                return
            }
            document.getElementById('parent').style.height = document.getElementById('question').clientHeight + "px"
        }

        document.addEventListener("DOMContentLoaded", () => {
            Livewire.hook('component.initialized', (component) => {
                console.log('initialized')
                updateHeight()
            })
            Livewire.hook('element.initialized', (el, component) => {
                console.log('element initialized')
            })
            Livewire.hook('element.updating', (fromEl, toEl, component) => {
                MathJax.typeset()
                updateHeight()
            })
            Livewire.hook('element.updated', (el, component) => {
                MathJax.typeset()
                updateHeight()
            })
            Livewire.hook('element.removed', (el, component) => {})
            Livewire.hook('message.sent', (message, component) => {})
            Livewire.hook('message.failed', (message, component) => {})
            Livewire.hook('message.received', (message, component) => {})
            Livewire.hook('message.processed', (message, component) => {})
        });
    </script>
</x-app-layout>