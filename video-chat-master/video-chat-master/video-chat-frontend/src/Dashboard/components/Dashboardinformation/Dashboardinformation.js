import React from 'react';

import './Dashboardinformation.css';

const DashboardInformation = ({ username }) => {
  return (
    <div className='dashboard_info_text_container'>
      <span className='dashboard_info_text_title'>
        Hello {username} welcome in VideoChat.
      </span>
      <span className='dashboard_info_text_description'>
      Bạn có thể bắt đầu cuộc gọi gọi trực tiếp đến một người trong danh sách hoặc bạn có thể tạo hoặc tham gia cuộc gọi nhóm.
      </span>
    </div>
  );
};

export default DashboardInformation;
