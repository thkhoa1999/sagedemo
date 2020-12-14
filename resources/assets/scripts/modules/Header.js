const internals = {
  /**
   * Variable
   */
  $header: $('#header'),
  _numberScrol: 0,
  scrollTop: 0,
  class: 'pin-header',
  /**
   * Function
   */
  scrollPinHeader() {
    this.settingPin()
    $(window).on('scroll resize orientationchange', () => {
      this.settingPin()
    })
  },
  settingPin() {
    this.scrollTop = $(window).scrollTop()
    if (this.scrollTop > this._numberScrol) {
      this.$header.addClass(this.class)
    } else {
      this.$header.removeClass(this.class)
    }
  }
}

const Header = (() => {
  if (internals.$header.length) {
    internals.scrollPinHeader()
  }


  // $.ajax({
  //   type: 'post',
  //   dataType: 'json',
  //   url: window.AJAX_URL,
  //   data: {
  //     action: 'get_example',
  //     website: '9thwonder'
  //   },
  //   context: this,
  //   success(response) {
  //     if (response.success) {
  //       alert(response.data.text)
  //     }
  //     else {
  //       alert('Đã có lỗi xảy ra');
  //     }
  //   },
  //   error(jqXHR, textStatus, errorThrown) {
  //     console.log('The following error occured: ' + textStatus, errorThrown);
  //   }
  // })

})()

export default Header
