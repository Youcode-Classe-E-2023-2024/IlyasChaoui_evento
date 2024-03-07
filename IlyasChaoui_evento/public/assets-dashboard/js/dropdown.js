// Navbar notifications dropdown

var dropdown_triggers = document.querySelectorAll("[dropdown-trigger]");
dropdown_triggers.forEach((dropdown_trigger) => {
  let dropdown_menu = dropdown_trigger.parentElement.querySelector("[dropdown-menu]");

  dropdown_trigger.addEventListener("click", function () {
    dropdown_menu.classList.toggle("opacity-0");
    dropdown_menu.classList.toggle("pointer-events-none");
    dropdown_menu.classList.toggle("before:-top-5");
    if (dropdown_trigger.getAttribute("aria-expanded") == "false") {
      dropdown_trigger.setAttribute("aria-expanded", "true");
      dropdown_menu.classList.remove("transform-dropdown");
      dropdown_menu.classList.add("transform-dropdown-show");
    } else {
      dropdown_trigger.setAttribute("aria-expanded", "false");
      dropdown_menu.classList.remove("transform-dropdown-show");
      dropdown_menu.classList.add("transform-dropdown");
    }
  });

  window.addEventListener("click", function (e) {
    if (!dropdown_menu.contains(e.target) && !dropdown_trigger.contains(e.target)) {
      if (dropdown_trigger.getAttribute("aria-expanded") == "true") {
        dropdown_trigger.click();
      }
    }
  });
});

// assign roles dropdown
window.Components = {
    customSelect(options) {
        return {
            init() {
                this.$refs.listbox.focus()
                this.optionCount = this.$refs.listbox.children.length
                this.$watch('selected', value => {
                    if (!this.open) return

                    if (this.selected === null) {
                        this.activeDescendant = ''
                        return
                    }

                    this.activeDescendant = this.$refs.listbox.children[this.selected - 1].id
                })
            },
            activeDescendant: null,
            optionCount: null,
            open: false,
            selected: null,
            value: 1,
            choose(option) {
                this.value = option
                this.open = false
            },
            onButtonClick() {
                if (this.open) return
                this.selected = this.value
                this.open = true
                this.$nextTick(() => {
                    this.$refs.listbox.focus()
                    this.$refs.listbox.children[this.selected - 1].scrollIntoView({ block: 'nearest' })
                })
            },
            onOptionSelect() {
                if (this.selected !== null) {
                    this.value = this.selected
                }
                this.open = false
                this.$refs.button.focus()
            },
            onEscape() {
                this.open = false
                this.$refs.button.focus()
            },
            onArrowUp() {
                this.selected = this.selected - 1 < 1 ? this.optionCount : this.selected - 1
                this.$refs.listbox.children[this.selected - 1].scrollIntoView({ block: 'nearest' })
            },
            onArrowDown() {
                this.selected = this.selected + 1 > this.optionCount ? 1 : this.selected + 1
                this.$refs.listbox.children[this.selected - 1].scrollIntoView({ block: 'nearest' })
            },
            ...options,
        }
    },
}
