/*!
 * Matomo - free/libre analytics platform
 *
 * @link    https://matomo.org
 * @license https://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

import { nextTick, DirectiveBinding } from 'vue';

interface ContentTableValue {
  off?: boolean; // if set to true, does not apply style
}

export default {
  mounted(el: HTMLElement, binding?: DirectiveBinding<ContentTableValue|undefined>): void {
    if (binding?.value?.off) {
      return;
    }

    el.classList.add('card', 'card-table', 'entityTable');
  },
  updated(el: HTMLElement, binding?: DirectiveBinding<ContentTableValue|undefined>): void {
    if (binding?.value?.off) {
      return;
    }

    // classes can be overwritten when elements bind to :class, nextTick + using
    // updated avoids this problem (and doing in both mounted and updated avoids a temporary
    // state where the classes aren't added)
    nextTick(() => {
      el.classList.add('card', 'card-table', 'entityTable');
    });
  },
};
