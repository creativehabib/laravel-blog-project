<main class="main-content w-full px-[var(--margin-x)] pb-8">
    <div
      class="flex flex-col items-center justify-between space-y-4 py-5 sm:flex-row sm:space-y-0 lg:py-6"
    >
      <div class="flex items-center space-x-1">
        <h2
          class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50"
        >
          New Post
        </h2>
      </div>
      <div class="flex justify-center space-x-2">
        <button
          class="btn min-w-[7rem] border border-slate-300 font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90"
        >
          Preview
        </button>
        <button
          class="btn min-w-[7rem] bg-primary font-medium hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
        >
          Save
        </button>
      </div>
    </div>
    <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
      <div class="col-span-12 lg:col-span-8">
        <div class="card">
          <div class="tabs flex flex-col">
            <div class="tab-content p-4 sm:p-5">
              <div class="space-y-5">
                <label class="block">
                  <span
                    class="font-medium text-slate-600 dark:text-navy-100"
                    >Title</span
                  >
                  <input
                    class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Enter post title"
                    type="text"
                  />
                </label>
                <label class="block">
                  <span
                    class="font-medium text-slate-600 dark:text-navy-100"
                    >Caption</span
                  >
                  <input
                    class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Enter post caption"
                    type="text"
                  />
                </label>
                <div>
                  <span
                    class="font-medium text-slate-600 dark:text-navy-100"
                    >Post Content</span
                  >
                  <div class="mt-1.5 w-full">
                   <textarea class="w-full" name="" id="" ></textarea>
                  </div>
                </div>
                <div>
                  <span
                    class="font-medium text-slate-600 dark:text-navy-100"
                    >Post Images</span
                  >
                  <div
                    class="filepond fp-bordered fp-grid mt-1.5 [--fp-grid:2]"
                  >
                    <input
                      type="file"
                      x-init="$el._x_filepond = FilePond.create($el)"
                      multiple
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </main>
