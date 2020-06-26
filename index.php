
<!DOCTYPE >
<html>
<head>

<title>Помощь в арбитражных делах</title>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

<link rel="stylesheet" media="all" href="css/libs.css">
<link rel="stylesheet" media="all" href="css/font.min.css">
<link rel="stylesheet" media="all" href="css/style.min.css">

<script src='js/libs.js'></script>

<script>

    function send_form(a){

      	var name_client = $('.' + a + ' input[name="nameClient"]').val();
      	var phone_client = $('.' + a + ' input[name="phoneClient"]').val();
      	var email_client = $('.' + a + ' input[name="emailClient"]').val();

      	if (name_client && phone_client) {
		    $.ajax({
	            type: "POST",
	            url: "forma.php",
	            data: {
	                name_client: name_client,
	                phone_client: phone_client,
	                email_client: email_client
            	},
            	success: function(data) {
                	$('.' + a).html(data);
                	$('.norequired').removeClass('norequired_active');
            	}
        	});
		} else {
			$('.norequired').addClass('norequired_active');
			$('.norequired').html('<div class="uk-text-center" >Заполните поле Имя и Телефон</div>');
		}
	}
</script>
</head>
<body>

<div class='container'>
	<div class='row headerLine'>
		<div class='col-xs-4'>
			<img src='images/logo-dark.png' class='headerLine__logo'>
		</div>
		<div class='col-xs-8'>
			<div class='headerLine__right'>
				<div class='headerLine__phones'>
					<a href='tel://89660629785' class='headerLine__phone'><span>+7(966)</span>062-97-85</a>
				</div>
				<div class='headerLine__button'>
					<a href='#modal' data-uk-modal class='button button_small' onclick='yaCounter40456025.reachGoal("modal"); return true;'>Получить консультацию</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div class='header'>
	<div class='header__offer'>
		<h1>Нужен представитель в арбитражном суде?</h1>
	</div>
	<div class='header__description'>
		Поможем в урегулировании споров и конфликтов по ценам ниже рыночных
	</div>
	<div class='header__button'>
		<a href='#price' data-uk-modal class='button button_big' onclick='yaCounter40456025.reachGoal("modal"); return true;'>Посмотреть цены</a>
	</div>
</div>

<a name='service'></a>
<div class='block'>
	<div class='container'>
		<div class='row'>
			<div class='col-xs-12 col-sm-4'>
				<form action='#' method='POST' onsubmit="ga('send','event', 'zakazat', 'Submit');yaCounter40456025.reachGoal('zakaz'); return true;">
					<div class='forma'>
						<div class='forma__title'>Форма заявки</div>
						<div class='norequired'></div>
						<div class='forma__label forma__label_input'>
							<input type='text' name='nameClient' class='forma__input' placeholder='Ваше имя'>
						</div>
						<div class='forma__label forma__label_input'>
							<input type='text' name='phoneClient' class='forma__input phone' placeholder='Ваш телефон'>
						</div>
						<div class='forma__label forma__label_input'>
							<input type='text' name='emailClient' class='forma__input' placeholder='Ваш e-mail'>
						</div>
						<div class='forma__label'>
							<div class='button button_small forma__button' onclick='send_form("forma");'>Получить консультацию</div>
						</div>
					</div>
				</form>
			</div>
			<div class='col-xs-12 col-sm-8' id="usligi">
				<div class='rightBlock'>
					<div class='title title_center'>
						<div class='rightBlock__title title__left'>
							Наши услуги
						</div>
					</div>
					<div class='rightBlock__listColumns'>
						<div class='rightBlock__itemColumn'>
							Споры с поставщиками
						</div>
						<div class='rightBlock__itemColumn'>
							Взыскание задолжностей
						</div>
						<div class='rightBlock__itemColumn'>
							Корпоративные споры
						</div>
						<div class='rightBlock__itemColumn'>
							Строительные споры
						</div>
						<div class='rightBlock__itemColumn'>
							Арендные споры
						</div>
						<div class='rightBlock__itemColumn'>
							Транспортные споры
						</div>
					</div>

					<div class='rightBlock__itemColumn rightBlock__itemColumn_fullWidth'>
						Сделки, право собственности, залоги, поручительства
					</div>
					<div class='rightBlock__itemColumn rightBlock__itemColumn_fullWidth'>
						Споры с гос. органами (ФАС, ФРС, ФТС, ФНС, ДГИ, ФМС)
					</div>
					<div class='rightBlock__itemColumn rightBlock__itemColumn_fullWidth'>
						Сопровождение банкротных процедур
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class='block block_2' id="preimushestva">
	<div class='container'>
		<div class='row'>
			<div class='col-xs-12'>
				<div class='title title_center'>
					<div class='title__title title__white'>
						Преимущества
					</div>
				</div>
			</div>
		</div>

		<div class='row'>
			<div class='col-xs-12 col-sm-6 col-md-3'>
				<div class='blackBlock'>
					<div class='blackBlock__title'>
						<p>Профессиональные</p><p>юристы</p>
					</div>
					<div class='blackBlock__text'>
						в багаже которых сотни выиграных дел в арбитраже
					</div>
				</div>
			</div>

			<div class='col-xs-12 col-sm-6 col-md-3'>
				<div class='blackBlock'>
					<div class='blackBlock__title'>
						<p>Высокое</p><p>качество</p>
					</div>
					<div class='blackBlock__text'>
						предоставляемых юридических услуг
					</div>
				</div>
			</div>

			<div class='col-xs-12 col-sm-6 col-md-3'>
				<div class='blackBlock'>
					<div class='blackBlock__title'>
						<p>Поддержка</p><p>специалистов</p>
					</div>
					<div class='blackBlock__text'>
						различного профиля от юристов до аудиторов
					</div>
				</div>
			</div>

			<div class='col-xs-12 col-sm-6 col-md-3'>
				<div class='blackBlock'>
					<div class='blackBlock__title'>
						<p>Бесплатная</p><p>консультация</p>
					</div>
					<div class='blackBlock__text'>
						профессиональных юристов с огромным опытом в судебной практике
					</div>
				</div>
			</div>
		</div>	

		<div class='row'>
			<div class='col-xs-12 col-sm-6 col-md-3'>
				<div class='blackBlock'>
					<div class='blackBlock__title'>
						<p>Низкие</p><p>цены</p>
					</div>
					<div class='blackBlock__text'>
						на рынке юридических услуг по разным направлениям
					</div>
				</div>
			</div>
			<div class='col-xs-12 col-sm-6 col-md-3'>
				<div class='blackBlock'>
					<div class='blackBlock__title'>
						<p>Огромный</p><p>стаж</p>
					</div>
					<div class='blackBlock__text'>
						наших юристов в сфере разрешения орбитражных споров
					</div>
				</div>
			</div>
			<div class='col-xs-12 col-sm-6 col-md-3'>
				<div class='blackBlock'>
					<div class='blackBlock__title'>
						<p>Оперативное</p><p>решение</p>
					</div>
					<div class='blackBlock__text'>
						сложных юридических вопросов по арбитражному делу
					</div>
				</div>
			</div>
			<div class='col-xs-12 col-sm-6 col-md-3'>
				<div class='blackBlock'>
					<div class='blackBlock__title'>
						<p>Большой</p><p>опыт</p>
					</div>
					<div class='blackBlock__text'>
						работы с гос. учреждениями и правоохранительными органами
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<a name='process'></a>
<div class='block' id="processs">
	<div class='container'>
		<div class='row'>
			<div class='col-xs-12'>
				<div class='title title_center'>
					<div class='title__title title__dark'>
						Процесс работы
					</div>
				</div>
				<div class='title__description'>
					Оказывая услуги юридического обслуживания компаний и предпринимателей, наши специалисты проводят следующие мероприятия
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='col-xs-12 col-md-6'>
				<div class='listBlock'>
					<div class='listBlock__item'>
						<div class='listBlock__title'>
							Сбор письменных доказательств и иных документов,
						</div>
						<div class='listBlock__text'>
							необходимых для подготовки искового заявления либо отзыва на исковое заявление (совместно с доверителем)
						</div>
					</div>

					
					<div class='listBlock__item'>
						<div class='listBlock__title'>
							Подготовку искового заявления
						</div>
						<div class='listBlock__text'>
							либо отзыва на исковое заявление
						</div>
					</div>

					<div class='listBlock__item'>
						<div class='listBlock__title'>
							Подготовку заявления о принятии обеспечительных мер
						</div>
						<div class='listBlock__text'>
							(при необходимости)
						</div>
					</div>

					<div class='listBlock__item'>
						<div class='listBlock__title'>
							Подготовку мирового соглашения
						</div>
						<div class='listBlock__text'>
							(при необходимости)
						</div>
					</div>

					<div class='listBlock__item'>
						<div class='listBlock__title'>
							Судебное представительство доверителя
						</div>
						<div class='listBlock__text'>
							в судебных заседаниях арбитражного суда первой инстанции (без ограничения количества судебных заседаний)
						</div>
					</div>
				</div>
			</div>

			<div class='col-xs-12 col-md-6'>
				<div class='listBlock'>
					<div class='listBlock__item'>
						<div class='listBlock__title'>
							Разовые устные консультации
						</div>
						<div class='listBlock__text'>
							о правовых последствиях принятого арбитражным судом решения
						</div>
					</div>
					<div class='listBlock__item'>
						<div class='listBlock__title'>
							Услугу по получению исполнительного листа
						</div>
						<div class='listBlock__text'>
							(в том числе на принудительное исполнение определения суда о принятии обеспечительных мер)
						</div>
					</div>
					<div class='listBlock__item'>
						<div class='listBlock__title'>
							Технические работы: 
						</div>
						<div class='listBlock__text'>
							- направление процессуальных и иных документов другим  лицам, участвующим в деле, по почте;<br/>
							- подача документов в канцелярию суда;<br/>
							- ознакомление с материалами дела и изготовление фотокопий материалов дела<br/>
						</div>
					</div>
				</div>
			</div>	
		</div>		
	</div>
</div>

<a name='princip'></a>
<div class='block block_3'>
	<div class='container'>
		<div class='row'>
			<div class='col-xs-12'>
				<div class='title title_center'>
					<div class='title__title title__white'>
						Наши принципы
					</div>
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='col-xs-12 col-sm-4'>
				<div class='solidBlock'>
					<div class='solidBlock__title'>
						<p>Бесплатный</p><p>мониторинг</p>
					</div>
					<div class='solidBlock__text'>
						Перед началом любого судебного дела мы проводим бесплатный анализ перспектив судебного спора и возможность исполнения решения суда, а также консультацию по всем возникающим вопросам
					</div>
				</div>
			</div>

			<div class='col-xs-12 col-sm-4'>
				<div class='solidBlock'>
					<div class='solidBlock__title'>
						<p>Внимание</p><p>к деталям</p>
					</div>
					<div class='solidBlock__text'>
						Мы комплексно и детально вникаем в корень проблемы, изучаем нюансы и особенности каждого конкретного случая, находим рычаги и методы давления на противоположную сторону
					</div>
				</div>
			</div>

			<div class='col-xs-12 col-sm-4'>
				<div class='solidBlock'>
					<div class='solidBlock__title'>
						<p>Даем</p><p>гарантии</p>
					</div>
					<div class='solidBlock__text'>
						Мы гарантируем отсутствие рисков, максимальную выгоду и работу на результат благодаря многолетнему опыту в сфере юридических услуг, высокой квалификации всех сотрудников и успешной многолетней практике в суде
					</div>
				</div>
			</div>
		</div>		
	</div>
</div>

<a name='price'></a>
<div class='block' id="stoimost">
	<div class='container'>
		<div class='row'>
			<div class='col-xs-12'>
				<div class='title title_center'>
					<div class='title__title title__dark'>
						Стоимость услуг
					</div>
				</div>
				<div class='title__description'>
					Арбитраж, представительство в суде
				</div>
			</div>
		</div>

		<div class='row'>
			<div class='col-xs-12 col-sm-4'>
				<div class='blockPrice'>
					<div class='blockPrice__text'>
						Подготовка иска, аппеляционной, кассационной службы
					</div>
					<div class='blockPrice__price'>
						от 10 000 руб.
					</div>
				</div>
			</div>

			<div class='col-xs-12 col-sm-4'>
				<div class='blockPrice'>
					<div class='blockPrice__text'>
						Представительство в арбитраже, суде общей юрисдикции
					</div>
					<div class='blockPrice__price'>
						от 20 000 руб.
					</div>
				</div>
			</div>

			<div class='col-xs-12 col-sm-4'>
				<div class='blockPrice'>
					<div class='blockPrice__text'>
						Комплексное сопровождение в арбитраже
					</div>
					<div class='blockPrice__price'>
						от 30 000 руб.
					</div>
				</div>
			</div>
		</div>

		<div class='row'>
			<div class='xol-xs-12 uk-text-center'>
				<a href='#allPrice' data-uk-modal class='link link_dashed link_big' onclick='yaCounter40456025.reachGoal("modal"); return true;'>Посмотреть все цены</a>
			</div>
		</div>

		<div class='row'>
			<div class='col-xs-12'>
				<div class='formaHorizontal'>
					<form action='#' method='POST' onsubmit="ga('send','event', 'zakazat', 'Submit');yaCounter40456025.reachGoal('zakaz'); return true;">
						<div class='formaHorizontal__wrapperTitle'>
							<div class='formaHorizontal__title'>
								Форма заявки
							</div>
						</div>
						<div class='norequired'></div>
						<div class='formaHorizontal__labels'>
							<div class='formaHorizontal__label'>
								<input type='text' name='nameClient' class='formaHorizontal__input' placeholder='Ваше имя'>
							</div>
							<div class='formaHorizontal__label'>
								<input type='text' name='phoneClient' class='formaHorizontal__input phone' placeholder='Ваш телефон'>
							</div>
							<div class='formaHorizontal__label'>
								<input type='text' name='emailClient' class='formaHorizontal__input' placeholder='Ваше e-mail'>
							</div>
						</div>
						<div class='formaHorizontal__button'>
							<div class='button button_small' onclick='send_form("formaHorizontal");'>Получить консультацию</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<div class='block block_4'>
	<div class='container'>
		<div class='row'>
			<div class='col-xs-12'>
				<div class='title title_center'>
					<div class='title__title title__white'>
						Почему нам доверяют?
					</div>
				</div>
			</div>
		</div>

		<div class='row'>
			<div class='col-xs-12 col-sm-4'>
				<div class='blackBlock'>
					<div class='blackBlock__title'>
						<p>Качество</p><p>обслуживания</p>
					</div>
					<div class='blackBlock__text blackBlock__text_height'>
						Наличие высшего профессионального образования и большого опыта у наших специалистов позволяет решать задачи любой сложности
					</div>
				</div>
			</div>

			<div class='col-xs-12 col-sm-4'>
				<div class='blackBlock'>
					<div class='blackBlock__title'>
						<p>Нацеленность</p><p>на результат</p>
					</div>
					<div class='blackBlock__text blackBlock__text_height'>
						Доведем Вашу проблему до ее логического завершения
					</div>
				</div>
			</div>

			<div class='col-xs-12 col-sm-4'>
				<div class='blackBlock'>
					<div class='blackBlock__title'>
						<p>Скорость</p><p>обслуживания</p>
					</div>
					<div class='blackBlock__text blackBlock__text_height'>
						Вы получите консультацию по всем интересующим Вас вопросам от наших специалистов в течение 30минут
					</div>
				</div>
			</div>
		</div>

		<div class='row'>
			<div class='col-xs-12 col-sm-4'>
				<div class='blackBlock'>
					<div class='blackBlock__title'>
						<p>Экономия</p><p>средств</p>
					</div>
					<div class='blackBlock__text blackBlock__text_height'>
						Окажем Вам квалифицированную юридическую помощь без навязывания дополнительных услуг, в которых Вы не нуждаетесь
					</div>
				</div>
			</div>

			<div class='col-xs-12 col-sm-4'>
				<div class='blackBlock'>
					<div class='blackBlock__title'>
						<p>Финансовая</p><p>ответственность</p>
					</div>
					<div class='blackBlock__text blackBlock__text_height'>
						Вернем Ваши средства в случае расторжения договора
					</div>
				</div>
			</div>

			<div class='col-xs-12 col-sm-4'>
				<div class='blackBlock'>
					<div class='blackBlock__title'>
						<p>Полная</p><p>конфиденциальность</p>
					</div>
					<div class='blackBlock__text blackBlock__text_height'>
						Мы несем полную ответственность за безопасность, сохранность и конфиденциальность полученной от Вас информации
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class='footer'>
		<div class='container'>
			<div class='footer__container'>
				<div class='footer__logoWrapper'>
					<img src='images/logo-white.png' class='footer__logo'>
				</div>
				<div class='footer__copyright'>
					Все права защищены. 2016г.
				</div>
				<div class='footer__developer'>
					<div class='dev'>
						<div class='dev__one'>quotte.</div>
						<div class='dev__two'>creative agency</div>
						<div class='dev__three'><a href='http://quotte.ru'>Разработка сайтов</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="price" class="uk-modal">
    <div class="uk-modal-dialog">
		<a class="uk-modal-close uk-close"></a>
		<div class='modalBlock'>
			<div class='modalBlock__title'>
				Арбитражные дела
			</div>

			<div class='modalBlock__block'>
				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Подготовка иска, аппеляционной, кассационной службы
						</div>
						<div class='modalBlock__listPrice'>
							от 10 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Представительство в арбитраже, суде общей юрисдикции
						</div>
						<div class='modalBlock__listPrice'>
							от 20 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Комплексное сопровождение в арбитраже
						</div>
						<div class='modalBlock__listPrice'>
							от 30 000 руб.
						</div>
					</div>
				</div>
			</div>		
		</div>	
	</div>
</div>		

<div id="allPrice" class="uk-modal">
    <div class="uk-modal-dialog">
		<a class="uk-modal-close uk-close"></a>

		<div class='modalBlock'>
			<div class='modalBlock__title'>
				Все цены
			</div>

			<div class='modalBlock__block'>
				<div class='modalBLock__listTitle'>
					Банкротство
				</div>
				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Подготовка документов для подачи в Арбитражный суд
						</div>
						<div class='modalBlock__listPrice'>
							30 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Оспаривание сделок
						</div>
						<div class='modalBlock__listPrice'>
							от 30 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Включение имущества в конкурсную массу
						</div>
						<div class='modalBlock__listPrice'>
							30 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Защита прав кредитора
						</div>
						<div class='modalBlock__listPrice'>
							50 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Обжалование действий арбитражного управляющего
						</div>
						<div class='modalBlock__listPrice'>
							30 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Преднамеренное банкротство
						</div>
						<div class='modalBlock__listPrice'>
							200 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Возбуждение, прекращение уголовного дела
						</div>
						<div class='modalBlock__listPrice'>
							40 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Банкротство физических лиц
						</div>
						<div class='modalBlock__listPrice'>
							50 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Банкротство ИП
						</div>
						<div class='modalBlock__listPrice'>
							от 100 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Банкротство юридических лиц под ключ
						</div>
						<div class='modalBlock__listPrice'>
							от 210 000 руб.
						</div>
					</div>
				</div>
			</div>

			<div class='modalBlock__block'>
				<div class='modalBLock__listTitle'>
					Корпоративные споры:
				</div>
				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Оспаривание выхода участника/акционера
						</div>
						<div class='modalBlock__listPrice'>
							от 50 000 руб.
						</div>
					</div>
				</div>	

				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Снятие с должности генерального директора
						</div>
						<div class='modalBlock__listPrice'>
							от 50 000 руб.
						</div>
					</div>
				</div>	

				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Взыскание убытков с генерального директора
						</div>
						<div class='modalBlock__listPrice'>
							от 70 000 руб.
						</div>
					</div>
				</div>	

				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Признание крупной сделки недействительной
						</div>
						<div class='modalBlock__listPrice'>
							от 70 000 руб.
						</div>
					</div>
				</div>	

				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Взыскание действительной стоимости доли и не выплаченных доходов - дивидендов
						</div>
						<div class='modalBlock__listPrice'>
							от 40 000 руб.
						</div>
					</div>
				</div>	

				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Привлечение к субсидиарной ответственности генерального директора, учредителей
						</div>
						<div class='modalBlock__listPrice'>
							от 80 000 руб.
						</div>
					</div>
				</div>	

				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Проведение общего собрания
						</div>
						<div class='modalBlock__listPrice'>
							30 000 руб.
						</div>
					</div>
				</div>	

				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Вывод недобросовестного участника
						</div>
						<div class='modalBlock__listPrice'>
							100 000 руб.
						</div>
					</div>
				</div>	

				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Сопровождение сделок
						</div>
						<div class='modalBlock__listPrice'>
							от 30 000 руб.
						</div>
					</div>
				</div>	
			</div>
			
			<div class='modalBlock__block'>
				<div class='modalBLock__listTitle'>
					Взыскание долгов:
				</div>
				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Дебиторская задолженность
						</div>
						<div class='modalBlock__listPrice'>
							от 40 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							По договорам долевого участия
						</div>
						<div class='modalBlock__listPrice'>
							от 50 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Аренда
						</div>
						<div class='modalBlock__listPrice'>
							от 30 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Подряд
						</div>
						<div class='modalBlock__listPrice'>
							от 50 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Через банкротство должника
						</div>
						<div class='modalBlock__listPrice'>
							от 150 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Поставка, купля-продажа
						</div>
						<div class='modalBlock__listPrice'>
							от 50 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Интеллектуальная собственность
						</div>
						<div class='modalBlock__listPrice'>
							от 70 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							С банка при отзыве лицензии
						</div>
						<div class='modalBlock__listPrice'>
							от 50 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							По договорам перевозки, экспедиции
						</div>
						<div class='modalBlock__listPrice'>
							от 30 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Со страховых компаний
						</div>
						<div class='modalBlock__listPrice'>
							от 30 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Займ, кредит
						</div>
						<div class='modalBlock__listPrice'>
							от 40 000 руб.
						</div>
					</div>
				</div>
			</div>
				
			<div class='modalBlock__block'>
				<div class='modalBLock__listTitle'>
					Налоговые споры:
				</div>
				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Оспаривание действий/бездействий ФНС
						</div>
						<div class='modalBlock__listPrice'>
							от 50 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Сопровождение камеральных проверок
						</div>
						<div class='modalBlock__listPrice'>
							от 30 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Взыскание средств из бюджета
						</div>
						<div class='modalBlock__listPrice'>
							от 40 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Споры по НДС
						</div>
						<div class='modalBlock__listPrice'>
							от 40 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Банкротство предприятия по заявлению налоговой
						</div>
						<div class='modalBlock__listPrice'>
							от 150 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Оспаривание решений ФНС
						</div>
						<div class='modalBlock__listPrice'>
							от 40 000 руб.
						</div>
					</div>
				</div>	
			</div>	

			<div class='modalBlock__block'>
				<div class='modalBLock__listTitle'>
					Сопровождение сделок:
				</div>
				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Купля-продажа земли
						</div>
						<div class='modalBlock__listPrice'>
							от 50 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Покупка зданий, помещений
						</div>
						<div class='modalBlock__listPrice'>
							от 60 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Сделки с ДГИ
						</div>
						<div class='modalBlock__listPrice'>
							от 50 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Сделки с покупкой имущественного комплекса
						</div>
						<div class='modalBlock__listPrice'>
							от 200 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Ценные бумаги
						</div>
						<div class='modalBlock__listPrice'>
							от 50 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Доли в ООО, акции АО
						</div>
						<div class='modalBlock__listPrice'>
							от 30 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Проверка чистоты сделки
						</div>
						<div class='modalBlock__listPrice'>
							от 20 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Регистрации сделок
						</div>
						<div class='modalBlock__listPrice'>
							от 15 000 руб.
						</div>
					</div>
				</div>
			</div>			

			<div class='modalBlock__block'>
				<div class='modalBLock__listTitle'>
					Строительные споры:
				</div>
				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Взыскание задолженности
						</div>
						<div class='modalBlock__listPrice'>
							от 50 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Споры с поставщиками
						</div>
						<div class='modalBlock__listPrice'>
							от 30 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Споры по качеству работ
						</div>
						<div class='modalBlock__listPrice'>
							40 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Снос самовольной постройки
						</div>
						<div class='modalBlock__listPrice'>
							от 150 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Расторжение договора
						</div>
						<div class='modalBlock__listPrice'>
							60 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Признание права собственности
						</div>
						<div class='modalBlock__listPrice'>
							50 000 руб.
						</div>
					</div>
				</div>
			</div>		

			<div class='modalBlock__block'>
				<div class='modalBLock__listTitle'>
					Споры с ФМС:
				</div>
				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Оспаривание действий/бездействий ФМС
						</div>
						<div class='modalBlock__listPrice'>
							30 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Уменьшение размера ответственности за трудоустройство мигрантов
						</div>
						<div class='modalBlock__listPrice'>
							40 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Смена ответственного лица
						</div>
						<div class='modalBlock__listPrice'>
							50 000 руб.
						</div>
					</div>
				</div>
			</div>		

			<div class='modalBlock__block'>
				<div class='modalBLock__listTitle'>
					Уголовно-правовая защита бизнеса
				</div>
				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Вред здоровью ст. 111,112,115 УК РФ
						</div>
						<div class='modalBlock__listPrice'>
							30 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Мошеничество ст. 159
						</div>
						<div class='modalBlock__listPrice'>
							от 90 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Кража ст. 158
						</div>
						<div class='modalBlock__listPrice'>
							40 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Разбой ст. 162
						</div>
						<div class='modalBlock__listPrice'>
							от 50 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Грабеж ст. 161
						</div>
						<div class='modalBlock__listPrice'>
							40 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Экономические преступления
						</div>
						<div class='modalBlock__listPrice'>
							от 90 000 руб.
						</div>
					</div>
				</div>
			</div>		

			<div class='modalBlock__block'>
				<div class='modalBLock__listTitle'>
					Административно-правовая защита бизнеса:
				</div>
				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Оспаривание действий/бездействий
						</div>
						<div class='modalBlock__listPrice'>
							от 30 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Признание права собственности
						</div>
						<div class='modalBlock__listPrice'>
							от 50 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Привлечение должностных лиц к ответственности
						</div>
						<div class='modalBlock__listPrice'>
							от 80 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Уменьшение размера ответственности
						</div>
						<div class='modalBlock__listPrice'>
							от 40 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Смена ответственного лица
						</div>
						<div class='modalBlock__listPrice'>
							от 50 000 руб.
						</div>
					</div>
				</div>
			</div>		

			<div class='modalBlock__block'>
				<div class='modalBLock__listTitle'>
					Практика разрешения споров и медиация
				</div>
				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Урегулирование споров
						</div>
						<div class='modalBlock__listPrice'>
							от 50 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Участие специалиста в переговорах
						</div>
						<div class='modalBlock__listPrice'>
							от 50 000 руб.
						</div>
					</div>
				</div>
			</div>		

			<div class='modalBlock__block'>
				<div class='modalBLock__listTitle'>
					Третейский суд
				</div>
				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							По делам имущественного характера
						</div>
						<div class='modalBlock__listPrice'>
							от 400 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							По делам неимущественного характера
						</div>
						<div class='modalBlock__listPrice'>
							80 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Займ, кредит
						</div>
						<div class='modalBlock__listPrice'>
							от 40 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Поставка
						</div>
						<div class='modalBlock__listPrice'>
							от 40 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							По сделкам
						</div>
						<div class='modalBlock__listPrice'>
							от 30 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Через процедуру банкротства
						</div>
						<div class='modalBlock__listPrice'>
							от 150 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Через альтернативную ликвидацию
						</div>
						<div class='modalBlock__listPrice'>
							от 50 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Страхование, перевозки, экспедиция
						</div>
						<div class='modalBlock__listPrice'>
							40 000 руб.
						</div>
					</div>
				</div>
			</div>		

			<div class='modalBlock__block'>
				<div class='modalBLock__listTitle'>
					Защита деловой репутации
				</div>
				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Подготовка претензии к редактору СМИ или владельцу сайта
						</div>
						<div class='modalBlock__listPrice'>
							от 10 000 руб.
						</div>
					</div>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Защита интересов юридического лица в арбитражном суде
						</div>
						<div class='modalBlock__listPrice'>
							от 35 000 руб.
						</div>
					</div>
				</div>
			</div>		

			<div class='modalBlock__block'>
				<div class='modalBLock__listTitle'>
					Защита авторских/смежных прав, патенты, регистрация товарного знака
				</div>
				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Защита/оспаривание авторских прав
						</div>
						<div class='modalBlock__listPrice'>
							60 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Защита прав на патент
						</div>
						<div class='modalBlock__listPrice'>
							60 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Установление правообладателя
						</div>
						<div class='modalBlock__listPrice'>
							75 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Защита прав на товарный знак
						</div>
						<div class='modalBlock__listPrice'>
							40 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Защита произведений: медиа, текст, искусство
						</div>
						<div class='modalBlock__listPrice'>
							от 35 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Защита прав на программное обеспечение
						</div>
						<div class='modalBlock__listPrice'>
							от 50 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Регистрация
						</div>
						<div class='modalBlock__listPrice'>
							от 35 000 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Взыскание убытков в суде
						</div>
						<div class='modalBlock__listPrice'>
							от 40 000 руб.
						</div>
					</div>
				</div>
			</div>		

			<div class='modalBlock__block'>
				<div class='modalBLock__listTitle'>
					Международная практика
				</div>
				<div class='modalBlock__list'>
					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Представление интересов иностранных компаний в России
						</div>
						<div class='modalBlock__listPrice'>
							от 29 900 руб.
						</div>
					</div>

					<div class='modalBlock__listItem'>
						<div class='modalBlock__listName'>
							Внешнеторговые контракты
						</div>
						<div class='modalBlock__listPrice'>
							от 500$
						</div>
					</div>
				</div>
			</div>		

		</div>
	</div>
</div>		


<div id="modal" class="uk-modal">
    <div class="uk-modal-dialog">
		<a class="uk-modal-close uk-close"></a>

		<div class='modalForm'>
			<form action='#' method='POST' onsubmit="ga('send','event', 'zakazat', 'Submit');yaCounter40456025.reachGoal('zakaz'); return true;">
				<div class='modalForm__title'>
					Получить консультацию
				</div>
				<div class='norequired'></div>
				<div class='modalForm__block'>
					<div class='modalForm__label'>
						<input type='text' name='nameClient' class='modalForm__input' placeholder='Ваше имя'>
					</div>
					<div class='modalForm__label'>
						<input type='text' name='phoneClient' class='phone modalForm__input' placeholder='Ваш телефон'>
					</div>
					<div class='modalForm__label'>
						<input type='text' name='emailClient' class='modalForm__input' placeholder='Ваш e-mail'>
					</div>
					<div class='modalForm__label'>
						<div class='button button_small' onclick='send_form("modalForm");'>Получить консультацию</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>		

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter40456025 = new Ya.Metrika({
                    id:40456025,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/40456025" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<script>
$(function($){
   	$(".phone").mask("+7 (999) 999-99-99");
});
</script>
</body>
</html>