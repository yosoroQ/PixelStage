// 悬停自动播放
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.video-item video').forEach(video => {
        video.addEventListener('mouseenter', () => video.play());
        video.addEventListener('mouseleave', () => video.pause());
    });
});
