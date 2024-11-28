window._ = require('lodash');

import axios from 'axios';
window.axios = axios
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Echo from 'laravel-echo';
import * as Pusher from 'pusher-js';
window.Pusher = Pusher

const config = {
    broadcaster: process.env.MIX_PUSHER_APP_BROADCAST,
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    wsHost: process.env.MIX_PUSHER_APP_IP,
    wsPort: process.env.MIX_PUSHER_APP_PORT,
    forceTLS: false,
    disableStats: true,
    enabledTransports: ['ws', 'wss'],
    encrypted: true,
}

// Pusher.logToConsole = true;
window.Echo = new Echo(config);

window.onload=()=>{
    new Echo(config)
    .channel(`status-liked`)
    .listen('StatusLiked', (e) => {
        console.log(e);
    });
}

