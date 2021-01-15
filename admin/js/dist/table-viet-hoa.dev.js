"use strict";

(function ($) {
  'use strict';

  console.log($.fn.bootstrapTable());
  $.fn.bootstrapTable.locales['vi-VN'] = {
    formatLoadingMessage: function formatLoadingMessage() {
      return 'Đang tải...';
    },
    formatRecordsPerPage: function formatRecordsPerPage(pageNumber) {
      return pageNumber + ' bản ghi mỗi trang';
    },
    formatShowingRows: function formatShowingRows(pageFrom, pageTo, totalRows) {
      return 'Hiển thị từ trang ' + pageFrom + ' đến ' + pageTo + ' của ' + totalRows + ' bảng ghi';
    },
    formatSearch: function formatSearch() {
      return 'Tìm kiếm';
    },
    formatNoMatches: function formatNoMatches() {
      return 'Không có dữ liệu';
    }
  };
  $.extend($.fn.bootstrapTable.defaults, $.fn.bootstrapTable.locales['vi-VN']);
})(jQuery);