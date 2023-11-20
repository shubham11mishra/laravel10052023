<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body x-data>
    <div class="grid">
        <button @click="$dispatch('notify', { message: 'error!',format:'danger' })">
            error
        </button>
        <button @click="$dispatch('notify', { message: ' Warning!Warning!Warning!Warning!Warning!Warning!Warning!Warning!',format:'warning' })">
            warning
        </button>
        <button @click="$dispatch('notify', { message: 'Success!',format:'success' })">
            success
        </button>
        <button @click="$dispatch('notify', { message: 'genral!' })">
            genral
        </button>
    </div>


    <div class="fixed bottom-0 right-0 space-y-1" x-ref="notificationDiv" x-data="notification"
        @notify.window="notification($event)">
        <template x-for="(notificationItem,index) in notificationItems" :key="index">
            <div class="flex justify-between items-center   p-2 " :class='notificationItem.format'>
                <div class="px-2" x-text="notificationItem.message"></div>
                <div class="w-4 flex justify-center items-center " @click='close(index)'>
                    <img width="32" height="32"
                        src="https://img.icons8.com/external-inkubators-basic-outline-inkubators/32/external-close-button-it-and-computer-inkubators-basic-outline-inkubators.png"
                        alt="external-close-button-it-and-computer-inkubators-basic-outline-inkubators" />
                </div>
            </div>

        </template>
    </div>
    <script>
        document.addEventListener('alpine:init', () => {
            console.log('a');
            Alpine.data('notification', () => ({
                formats: {
                    danger: 'bg-red-400',
                    warning: 'bg-yellow-300',
                    success: 'bg-green-300'
                },
                notificationTimeout: 1000,
                notificationItems: [],
                close(index) {
                    this.notificationItems.splice(index, 1);
                },
                notification(e) {
                    const format = (e.detail?.format in this.formats) ? this.formats[e.detail.format] :
                        'bg-green-300'
                    const currentArrayLength = this.notificationItems.length+1;
                    console.log(currentArrayLength);
                    this.notificationItems.push({
                        id: currentArrayLength,
                        message: e.detail.message,
                        format: format
                    })
                    console.log(this.notificationItems);
                    const timeout = setTimeout(() => {

                        this.notificationItems.splice(currentArrayLength-1, 1);
                        clearTimeout(timeout);
                    }, this.notificationTimeout);

                }
            }))
        })
    </script>
</body>

</html>
