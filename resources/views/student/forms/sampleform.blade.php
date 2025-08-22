<x-student-layout>
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <form action="" method="POST" class="block">
            <div class="mt-3 p-1 max-w-7xl w-full bg-lightgray rounded mx-auto shadow-md">
                <p class="text-right mt-3 mr-3 max-lg:text-sm max-md:text-sm max-sm:text-xs">FORM 2(A)</p>
                <h1
                    class="text-center mt-10 max-2xl:mt-6 max-lg:mt-6 max-md:mt-6 font-bold text-2xl max-xl:text-xl max-lg:text-lg max-md:text-base max-sm:text-sm mb-2 underline">
                    STUDY PROTOCOL REVIEW
                    CHECKLIST</h1>
            </div>
            <!-- Group: Only one checkbox allowed -->
            <label class="flex items-start space-x-2">
                <input type="checkbox" class="exclusive-check toggle-box" data-group="sponsor" data-toggle="1">
                <span>Sponsored by Pharmaceutical Company</span>
            </label>
            <input type="text" class="toggle-target text-sm h-[28px] rounded border border-darkgray"
                placeholder="Specify" data-toggle="1" disabled>

            <label class="flex items-start space-x-2 mt-2">
                <input type="checkbox" class="exclusive-check toggle-box" data-group="sponsor" data-toggle="2">
                <span>Others</span>
            </label>
            <input type="text" class="toggle-target text-sm h-[28px] rounded border border-darkgray"
                placeholder="Specify" data-toggle="2" disabled>

        </form>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const checkboxes = document.querySelectorAll('.exclusive-check');

                checkboxes.forEach(checkbox => {
                    checkbox.addEventListener('change', function () {
                        // Uncheck all others in the same data-group
                        const group = this.dataset.group;
                        const toggle = this.dataset.toggle;

                        checkboxes.forEach(cb => {
                            if (cb !== this && cb.dataset.group === group) {
                                cb.checked = false;

                                // Disable the textbox linked to the other checkbox
                                const otherTextbox = document.querySelector(`.toggle-target[data-toggle="${cb.dataset.toggle}"]`);
                                if (otherTextbox) {
                                    otherTextbox.disabled = true;
                                }
                            }
                        });

                        // Enable/disable this checkbox's textbox
                        const textbox = document.querySelector(`.toggle-target[data-toggle="${toggle}"]`);
                        if (textbox) {
                            textbox.disabled = !this.checked;
                        }
                    });
                });
            });

        </script>
    </main>
</x-student-layout>