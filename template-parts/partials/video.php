<video
                            id="my-video"
                            class="video-js vjs-static-controls vjs-lime test2"
                            controls
                            playsinline
                            preload="none"
                            poster="<?php echo get_field('video_thumbnail', get_page_by_title( 'How does it work' )) ?>"
                        >
                            <source src="<?php echo get_field('video_webm', get_page_by_title( 'How does it work' )) ?>" type="video/webm" />
                            <source src="<?php echo get_field('video', get_page_by_title( 'How does it work' )) ?>" type='video/mp4'>

                            <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank"
                                >supports HTML5 video</a
                            >
                            </p>
                        </video>