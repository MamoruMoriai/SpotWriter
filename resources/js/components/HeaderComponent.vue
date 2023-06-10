<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div style="font-size: 2em; margin: 0.5em 1em;">
                        SPOT
                    </div>
                    <div id="scroll-area">
				        <div id="scroll-id" style="border-bottom: solid #555555;"><img src="../../../public/image/skate.png" alt=""></div>
			        </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    

    export default {
        mounted() {
            $(document).ready( function() {
	            scroll();
            });

            $(window).scroll(function() {
	            scroll();
            });

            function scroll() {
	            var pageHeight = $(document).height();				// ページ全体の高さ	$(document).innerHeight()
	            var windowHeight = $(window).height();				// 表示画面の高さ	$(window).innerHeight()
	            var height = windowHeight - pageHeight;
                var scrollTop = $(window).scrollTop();					// 表示中の最高位置	$(window).scrollTop()
	            var windowBottom = pageHeight - windowHeight / 2 - scrollTop;		// 表示中の最低位置	pageHeight - windowHeight - scrollTop
	            var scrollWidth = $('#scroll-area').width();				// パイプの長さ		$('#scroll-area').width()
	            var scrollPoint = scrollWidth * (1 - windowBottom / pageHeight);
	
	            // 画像表示要素<div>を移動
	            $('#scroll-id').offset({left: scrollPoint});
            }
        }
    }
</script>
