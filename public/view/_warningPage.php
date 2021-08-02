<style>
    .outer-warning {
        width: 100%;
        display: block;
        position: absolute;
        top: 300px;
    }
    .warning-div {
        min-height: 1px;
        width: 206px;
        height: 206px;
        z-index: 999;
        margin: 0 auto;
        /*margin-top: 300px;*/
    }
    .warning-div * {
        margin: 0 auto;
        text-align: center;
    }
    .warning-divInner {
        display: block;
        height: 100%;
        width: 100%;
        border-radius: 100%;
        background: rgba(255,255,255,0.8);
        padding: 40px 20px;
    }
    .warning-icon {
        display: block;
        height: 45px;
        width: 54px;
        background-image: url('../img/icon/warning.png');
        background-repeat: no-repeat;
        background-origin: border-box;
        background-position: center center;
        background-size: cover;
    }
    .warning-title, .warning-detail {
        color: #0D84BB;
    }
    .warning-title {
        margin-top: 10px;
        font-size: 26px;
    }
    .warning-detail {
        font-size: 9px;
    }
</style>

<div class="outer-warning">
    <div class="warning-div">
        <div class="warning-divInner">
            <div class="warning-icon">
                &nbsp;
            </div>
            <div class="warning-title text-uppercase font-oswaldBold">
                MOHON MAAF
            </div>
            <div class="warning-detail font-LatoBold">
                Data yang Anda minta <br>belum tersedia
            </div>
        </div>
    </div>
</div>