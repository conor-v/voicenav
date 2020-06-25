require('./style.css');

{
  const init = () => {
    const $btn = document.querySelector('.btn');
    const $btnCommandLine = document.querySelector(`.toggle_btn-btn`);
    const $audio = document.querySelector(`.audio`);
    const SpeechRecognition = window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

    $audio.volume = 0.1;

    const recognition = new SpeechRecognition();
    recognition.interimResults = true;

    recognition.addEventListener('result', e => {
      const transcript = Array.from(e.results)
        .map(result => result[0])
        .map(result => result.transcript)
        .join('');

      pageChance(transcript);
      audioController(transcript, $audio);
      itemSelect(transcript);
    });

    $btn.addEventListener('click', () => {
      recognition.start();
    });
    $btnCommandLine.addEventListener(`click`, () => {
      toggleCommandLine();
    });
  };

  const toggleCommandLine = () => {
    const $sidebar = document.querySelector(`.sidebar`);
    $sidebar.classList.toggle('active');
  };

  const pageChance = command => {
    if (command.includes('home')) {
      location.replace(`index.php?page=index`);
    }
    if (command.includes('about')) {
      location.replace(`index.php?page=about`);
    }
    if (command.includes('shop')) {
      location.replace(`index.php?page=shop`);
    }
    if (command.includes('contact')) {
      location.replace(`index.php?page=contact`);
    }
  };

  const audioController = (command, audio) => {
    if (command.includes('play')) {
      audio.play();
    }
    if (command.includes('pause')) {
      audio.pause();
    }
  };

  const itemSelect = command => {
    const $items = document.querySelectorAll(`.item`);
    $items.forEach(item => {
      if (command.includes(`check item ${item.dataset.indexNumber}`)) {
        location.replace(`index.php?page=details&id=${item.id}`);
      }
      if (command.includes(`check item to`)) {
        location.replace(`index.php?page=details&id=2`);
      }
      if (command.includes(`check item for`)) {
        location.replace(`index.php?page=details&id=4`);
      }
    });
  };

  init();
}
