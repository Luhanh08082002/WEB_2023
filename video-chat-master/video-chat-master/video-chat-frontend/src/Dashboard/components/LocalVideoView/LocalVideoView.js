import React, { useRef, useEffect } from 'react';

const styles = {
  videoContainer: {
    width: '160px',
    height: '170px',
    borderRadius: '8px',
    position: 'absolute',
    top: '0%',
    right: '36%'
  },
  videoElement: {
    width: '100%',
    height: '140%',
  },
 
};

const LocalVideoView = props => {
  const { localStream } = props;
  const localVideoRef = useRef();

  useEffect(() => {
    if (localStream) {
      const localVideo = localVideoRef.current;
      localVideo.srcObject = localStream;

      localVideo.onloadedmetadata = () => {
        localVideo.play();
      };
    }
  }, [localStream]);

  return (
    <div style={styles.videoContainer} className='background_secondary_color'>
      <span> Bạn </span>
      <video style={styles.videoElement} ref={localVideoRef} autoPlay muted />
    </div>
  );
};

export default LocalVideoView;
