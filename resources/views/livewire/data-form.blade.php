<form wire:submit.prevent="save">
    @csrf
    <h1 class="text-center text-white font-medium text-[2rem] pt-[2rem] pb-5">Enter your details</h1>
    <div class="bg-[#161B22] rounded-[1.5rem] py-4 px-4 grid grid-cols-3">
        <div>
            <div class="label">
                <span class="label-text text-white">Name</span>
            </div>
            <input wire:model="name" type="text" placeholder="Your Name" class="input input-bordered bg-[#161B22] border-gray-500 focus:border-white text-white font-medium w-full max-w-xs"/>
        </div>
        <div>
            <div class="label">
                <span class="label-text text-white">Profile Picture</span>
            </div>
            <input wire:model="profilepic" type="file" class="file-input w-full max-w-xs"/>
        </div>
        <div>
            <div class="label">
                <span class="label-text text-white">Occupation</span>
            </div>
            <input wire:model="occupation" type="text" placeholder="Software dev" class="input input-bordered bg-[#161B22] border-gray-500 focus:border-white text-white font-medium w-full max-w-xs"/>
        </div>
        <div>
            <div class="label">
                <span class="label-text text-white">Pronouns</span>
            </div>
            <input wire:model="pronouns" type="text" placeholder="He/Him" class="input input-bordered bg-[#161B22] border-gray-500 focus:border-white text-white font-medium w-full max-w-xs"/>
        </div>
        <div class="pt-5">
            <div class="label">
                <span class="label-text text-white">Intro</span>
            </div>
            <textarea wire:model="introduction" class="textarea textarea-bordered bg-[#161B22] border-gray-500 focus:border-white text-white font-medium w-full max-w-xs" placeholder="A brief intro about you goes here."></textarea>
        </div>
        <div class="pt-5">
            <div class="label">
                <span class="label-text text-white">Second Picture</span>
            </div>
            <input wire:model="image2" type="file" class="file-input w-full max-w-xs"/>
        </div>
        <div class="pt-5">
            <div class="label">
                <span class="label-text text-white">About</span>
            </div>
            <textarea wire:model="about" class="textarea textarea-bordered bg-[#161B22] border-gray-500 focus:border-white text-white font-medium w-full max-w-xs" placeholder="share something about yourself."></textarea>
        </div>
        <div class="pt-5">
            <div class="label">
                <span class="label-text text-white">Third Picture</span>
            </div>
            <input wire:model="image3" type="file" class="file-input w-full max-w-xs"/>
        </div>
        <div class="pt-5">
            <div class="label">
                <span class="label-text text-white">Twitter Link</span>
            </div>
            <div class="relative space-x-1">
                <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-6 w-6 text-white" fill="none" height="25" width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M0 0h512v512H0z" fill="#000"/>
                    <path clip-rule="evenodd" d="M192.034 98H83l129.275 170.757L91.27 412h55.908l91.521-108.34 81.267 107.343H429L295.968 235.284l.236.303L410.746 99.994h-55.908l-85.062 100.694zm-48.849 29.905h33.944l191.686 253.193h-33.944z" fill="#fff" fill-rule="evenodd"/>
                </svg>
                <input wire:model="twitter" type="text" placeholder="x.com/cj_sagnsn" class="input input-bordered bg-[#161B22] border-gray-500 focus:border-white text-white font-medium w-full max-w-xs pl-10"/>
            </div>
        </div>
        <div class="pt-5">
            <div class="label">
                <span class="label-text text-white">Instagram Link</span>
            </div>
            <div class="relative space-x-1">
                <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 2499.899999999999 2500"><defs><radialGradient id="a" cx="332.14" cy="2511.81" r="3263.54" gradientUnits="userSpaceOnUse"><stop offset=".09" stop-color="#fa8f21"/><stop offset=".78" stop-color="#d82d7e"/></radialGradient><radialGradient id="b" cx="1516.14" cy="2623.81" r="2572.12" gradientUnits="userSpaceOnUse"><stop offset=".64" stop-color="#8c3aaa" stop-opacity="0"/><stop offset="1" stop-color="#8c3aaa"/></radialGradient></defs><path d="M833.4 1250c0-230.11 186.49-416.7 416.6-416.7s416.7 186.59 416.7 416.7-186.59 416.7-416.7 416.7-416.6-186.59-416.6-416.7m-225.26 0c0 354.5 287.36 641.86 641.86 641.86s641.86-287.36 641.86-641.86S1604.5 608.14 1250 608.14 608.14 895.5 608.14 1250m1159.13-667.31a150 150 0 1 0 150.06-149.94h-.06a150.07 150.07 0 0 0-150 149.94M745 2267.47c-121.87-5.55-188.11-25.85-232.13-43-58.36-22.72-100-49.78-143.78-93.5s-70.88-85.32-93.5-143.68c-17.16-44-37.46-110.26-43-232.13-6.06-131.76-7.27-171.34-7.27-505.15s1.31-373.28 7.27-505.15c5.55-121.87 26-188 43-232.13 22.72-58.36 49.78-100 93.5-143.78s85.32-70.88 143.78-93.5c44-17.16 110.26-37.46 232.13-43 131.76-6.06 171.34-7.27 505-7.27s373.28 1.31 505.15 7.27c121.87 5.55 188 26 232.13 43 58.36 22.62 100 49.78 143.78 93.5s70.78 85.42 93.5 143.78c17.16 44 37.46 110.26 43 232.13 6.06 131.87 7.27 171.34 7.27 505.15s-1.21 373.28-7.27 505.15c-5.55 121.87-25.95 188.11-43 232.13-22.72 58.36-49.78 100-93.5 143.68s-85.42 70.78-143.78 93.5c-44 17.16-110.26 37.46-232.13 43-131.76 6.06-171.34 7.27-505.15 7.27s-373.28-1.21-505-7.27M734.65 7.57c-133.07 6.06-224 27.16-303.41 58.06C349 97.54 279.38 140.35 209.81 209.81S97.54 349 65.63 431.24c-30.9 79.46-52 170.34-58.06 303.41C1.41 867.93 0 910.54 0 1250s1.41 382.07 7.57 515.35c6.06 133.08 27.16 223.95 58.06 303.41 31.91 82.19 74.62 152 144.18 221.43S349 2402.37 431.24 2434.37c79.56 30.9 170.34 52 303.41 58.06C868 2498.49 910.54 2500 1250 2500s382.07-1.41 515.35-7.57c133.08-6.06 223.95-27.16 303.41-58.06 82.19-32 151.86-74.72 221.43-144.18s112.18-139.24 144.18-221.43c30.9-79.46 52.1-170.34 58.06-303.41 6.06-133.38 7.47-175.89 7.47-515.35s-1.41-382.07-7.47-515.35c-6.06-133.08-27.16-224-58.06-303.41-32-82.19-74.72-151.86-144.18-221.43S2150.95 97.54 2068.86 65.63c-79.56-30.9-170.44-52.1-303.41-58.06C1632.17 1.51 1589.56 0 1250.1 0S868 1.41 734.65 7.57" fill="url(#a)"/><path d="M833.4 1250c0-230.11 186.49-416.7 416.6-416.7s416.7 186.59 416.7 416.7-186.59 416.7-416.7 416.7-416.6-186.59-416.6-416.7m-225.26 0c0 354.5 287.36 641.86 641.86 641.86s641.86-287.36 641.86-641.86S1604.5 608.14 1250 608.14 608.14 895.5 608.14 1250m1159.13-667.31a150 150 0 1 0 150.06-149.94h-.06a150.07 150.07 0 0 0-150 149.94M745 2267.47c-121.87-5.55-188.11-25.85-232.13-43-58.36-22.72-100-49.78-143.78-93.5s-70.88-85.32-93.5-143.68c-17.16-44-37.46-110.26-43-232.13-6.06-131.76-7.27-171.34-7.27-505.15s1.31-373.28 7.27-505.15c5.55-121.87 26-188 43-232.13 22.72-58.36 49.78-100 93.5-143.78s85.32-70.88 143.78-93.5c44-17.16 110.26-37.46 232.13-43 131.76-6.06 171.34-7.27 505-7.27s373.28 1.31 505.15 7.27c121.87 5.55 188 26 232.13 43 58.36 22.62 100 49.78 143.78 93.5s70.78 85.42 93.5 143.78c17.16 44 37.46 110.26 43 232.13 6.06 131.87 7.27 171.34 7.27 505.15s-1.21 373.28-7.27 505.15c-5.55 121.87-25.95 188.11-43 232.13-22.72 58.36-49.78 100-93.5 143.68s-85.42 70.78-143.78 93.5c-44 17.16-110.26 37.46-232.13 43-131.76 6.06-171.34 7.27-505.15 7.27s-373.28-1.21-505-7.27M734.65 7.57c-133.07 6.06-224 27.16-303.41 58.06C349 97.54 279.38 140.35 209.81 209.81S97.54 349 65.63 431.24c-30.9 79.46-52 170.34-58.06 303.41C1.41 867.93 0 910.54 0 1250s1.41 382.07 7.57 515.35c6.06 133.08 27.16 223.95 58.06 303.41 31.91 82.19 74.62 152 144.18 221.43S349 2402.37 431.24 2434.37c79.56 30.9 170.34 52 303.41 58.06C868 2498.49 910.54 2500 1250 2500s382.07-1.41 515.35-7.57c133.08-6.06 223.95-27.16 303.41-58.06 82.19-32 151.86-74.72 221.43-144.18s112.18-139.24 144.18-221.43c30.9-79.46 52.1-170.34 58.06-303.41 6.06-133.38 7.47-175.89 7.47-515.35s-1.41-382.07-7.47-515.35c-6.06-133.08-27.16-224-58.06-303.41-32-82.19-74.72-151.86-144.18-221.43S2150.95 97.54 2068.86 65.63c-79.56-30.9-170.44-52.1-303.41-58.06C1632.17 1.51 1589.56 0 1250.1 0S868 1.41 734.65 7.57" fill="url(#b)"/>
                </svg>
                <input wire:model="threads" type="text" placeholder="threads.net/@carl_sgnsn" class="input input-bordered bg-[#161B22] border-gray-500 focus:border-white text-white font-medium w-full max-w-xs pl-10"/>
            </div>
        </div>
    </div>
    <div class="flex justify-center pt-10">
        <button type="submit" class="btn btn-active h-[5rem] w-[30rem] space-x-0 btn-neutral flex flex-col">
            Share your BentoLio
        </button>
    </div>
</form>

