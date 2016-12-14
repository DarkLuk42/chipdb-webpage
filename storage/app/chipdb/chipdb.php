<?php return array (
  16550 => 
  array (
    'description' => 'Universal asynchronous receiver-transmitter with FIFOs',
    'aliases' => 
    array (
      0 => '16C550',
    ),
    'package' => 'DIP',
    'pincount' => 40,
    'family' => 'uart',
    'datasheet' => 'http://www.national.com/ds/PC/PC16550D.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'D__0',
        'desc' => 'data bus',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'D__1',
        'desc' => 'data bus',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'D__2',
        'desc' => 'data bus',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D__3',
        'desc' => 'data bus',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'D__4',
        'desc' => 'data bus',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'D__5',
        'desc' => 'data bus',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'D__6',
        'desc' => 'data bus',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'D__7',
        'desc' => 'data bus',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'RCLK',
        'desc' => 'receiver clock input (16x baud rate)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'RX',
        'desc' => 'serial input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'TX',
        'desc' => 'serial output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'CS0',
        'desc' => 'chip select (active high)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'CS1',
        'desc' => 'chip select (active high)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '~CS2',
        'desc' => 'chip select (active low)',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~BAUDOUT',
        'desc' => 'baud rate generator output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'XIN',
        'desc' => 'external crystal input',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'XOUT',
        'desc' => 'external crystal output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => '~WR',
        'desc' => 'write enable (active low)',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'WR',
        'desc' => 'write enable (active high)',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => '~RD',
        'desc' => 'read enable (active low)',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'RD',
        'desc' => 'read enable (active high)',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'DDIS',
        'desc' => 'driver disable',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => '~TXRDY',
        'desc' => 'TX DMA signal',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => '~ADS',
        'desc' => 'address strobe input',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'A__2',
        'desc' => 'register select',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'A__1',
        'desc' => 'register select',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'A__0',
        'desc' => 'register select',
      ),
      28 => 
      array (
        'num' => '29',
        'sym' => '~RXRDY',
        'desc' => 'RX DMA signal',
      ),
      29 => 
      array (
        'num' => '30',
        'sym' => 'INTR',
        'desc' => 'interrupt output (active high)',
      ),
      30 => 
      array (
        'num' => '31',
        'sym' => '~OUT2',
        'desc' => 'general purpose output',
      ),
      31 => 
      array (
        'num' => '32',
        'sym' => '~RTS',
        'desc' => 'request to send (output to modem)',
      ),
      32 => 
      array (
        'num' => '33',
        'sym' => '~DTR',
        'desc' => 'data terminal ready (output to modem)',
      ),
      33 => 
      array (
        'num' => '34',
        'sym' => '~OUT1',
        'desc' => 'general purpose output',
      ),
      34 => 
      array (
        'num' => '35',
        'sym' => 'MR',
        'desc' => 'master reset (active high)',
      ),
      35 => 
      array (
        'num' => '36',
        'sym' => '~CTS',
        'desc' => 'clear to send (input from modem)',
      ),
      36 => 
      array (
        'num' => '37',
        'sym' => '~DSR',
        'desc' => 'data set ready (input from modem)',
      ),
      37 => 
      array (
        'num' => '38',
        'sym' => '~DCD',
        'desc' => 'data carrier detect (input from modem)',
      ),
      38 => 
      array (
        'num' => '39',
        'sym' => '~RI',
        'desc' => 'ring indicator (input from modem)',
      ),
      39 => 
      array (
        'num' => '40',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'maximum baud rate',
        'val' => '1.5',
        'unit' => 'Mbaud',
      ),
    ),
    'notes' => 
    array (
      0 => 'Register 000: receive buffer (read), transmit holding register (write)',
      1 => 'Register 001: interrupt enable',
      2 => 'Register 010: interrupt identification (read), FIFO control (write)',
      3 => 'Register 011: line control',
      4 => 'Register 100: modem control',
      5 => 'Register 101: line status',
      6 => 'Register 110: modem status',
      7 => 'Register 111: scratch register',
      8 => 'When bit 7 in the Line Control Register is set, the baud rate divisor latch is enabled. (register 000=LSB, register 001=MSB)',
    ),
  ),
  1802 => 
  array (
    'description' => 'CDP1802 CMOS 8-bit microprocessor',
    'aliases' => 
    array (
      0 => 'CDP1802A',
      1 => 'CDP1802AC',
      2 => 'CDP1802BC',
    ),
    'package' => 'DIP',
    'pincount' => 40,
    'family' => 'RCA',
    'datasheet' => 'pdf_datasheet_url',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'CLOCK',
        'desc' => 'input for externally generated single-phase clock',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '~WAIT~',
        'desc' => 'control line',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '~CLEAR~',
        'desc' => 'control line',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Q',
        'desc' => 'general output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'SC1',
        'desc' => 'state code',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'SC0',
        'desc' => 'state code',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '~MRD~',
        'desc' => 'read pulse',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'BUS 7',
        'desc' => 'data bus',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'BUS 6',
        'desc' => 'data bus',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'BUS 5',
        'desc' => 'data bus',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'BUS 4',
        'desc' => 'data bus',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'BUS 3',
        'desc' => 'data bus',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'BUS 2',
        'desc' => 'data bus',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'BUS 1',
        'desc' => 'data bus',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'BUS 0',
        'desc' => 'data bus',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'V__CC',
        'desc' => 'I/O voltage supply',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'N2',
        'desc' => 'I/O control line',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'N1',
        'desc' => 'I/O control line',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'N0',
        'desc' => 'I/O control line',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'V__SS',
        'desc' => 'ground',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => '~EF4~',
        'desc' => 'I/O flag',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => '~EF3~',
        'desc' => 'I/O flag',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => '~EF2~',
        'desc' => 'I/O flag',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => '~EF1~',
        'desc' => 'I/O flag',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'MA0',
        'desc' => 'memory address',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'MA1',
        'desc' => 'memory address',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'MA2',
        'desc' => 'memory address',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'MA3',
        'desc' => 'memory address',
      ),
      28 => 
      array (
        'num' => '29',
        'sym' => 'MA4',
        'desc' => 'memory address',
      ),
      29 => 
      array (
        'num' => '30',
        'sym' => 'MA5',
        'desc' => 'memory address',
      ),
      30 => 
      array (
        'num' => '31',
        'sym' => 'MA6',
        'desc' => 'memory address',
      ),
      31 => 
      array (
        'num' => '32',
        'sym' => 'MA7',
        'desc' => 'memory address',
      ),
      32 => 
      array (
        'num' => '33',
        'sym' => 'TPB',
        'desc' => 'timing pulse',
      ),
      33 => 
      array (
        'num' => '34',
        'sym' => 'TPA',
        'desc' => 'timing pulse',
      ),
      34 => 
      array (
        'num' => '35',
        'sym' => '~MWR~',
        'desc' => 'write pulse',
      ),
      35 => 
      array (
        'num' => '36',
        'sym' => '~INTERRUPT~',
        'desc' => 'interrupt',
      ),
      36 => 
      array (
        'num' => '37',
        'sym' => '~DMA_OUT~',
        'desc' => 'DMA out',
      ),
      37 => 
      array (
        'num' => '38',
        'sym' => '~DMA_IN~',
        'desc' => 'DMA in',
      ),
      38 => 
      array (
        'num' => '39',
        'sym' => '~XTAL~',
        'desc' => 'crystal input, for on-chip oscillator',
      ),
      39 => 
      array (
        'num' => '40',
        'sym' => 'V__DD',
        'desc' => 'internal voltage supply',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum input clock maximum frequency at 5V',
        'val' => '3.2',
        'unit' => 'MHz',
      ),
      1 => 
      array (
        'param' => 'Maximum input clock maximum frequency at 10V',
        'val' => '6.4',
        'unit' => 'MHz',
      ),
      2 => 
      array (
        'param' => 'Minimum instruction fetch-execute time at 5V',
        'val' => '5',
        'unit' => 'µs',
      ),
    ),
    'notes' => 
    array (
      0 => '',
    ),
  ),
  '24LC256' => 
  array (
    'description' => '256K I2C CMOS serial EEPROM',
    'aliases' => 
    array (
      0 => '24AA256',
      1 => '24FC256',
    ),
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'Microchip',
    'datasheet' => 'http://ww1.microchip.com/downloads/en/DeviceDoc/21203P.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'A0',
        'desc' => 'user-configurable chip select',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'A1',
        'desc' => 'user-configurable chip select',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A2',
        'desc' => 'user-configurable chip select',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'SDA',
        'desc' => 'serial data input/output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'SCL',
        'desc' => 'serial clock input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'WP',
        'desc' => 'write protect (active high)',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Minimum supply voltage',
        'val' => 
        array (
          0 => '1.7 (24AA256)',
          1 => '2.5 (24LC256)',
          2 => '1.7 (24FC256)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '100k (Vcc < 2.5V)',
          1 => '400k (24AA256)',
          2 => '400k (24LC256)',
          3 => '1M (24FC256)',
        ),
        'unit' => 'Hz',
      ),
      2 => 
      array (
        'param' => 'Maximum write cycle time',
        'val' => '5',
        'unit' => 'ms',
      ),
      3 => 
      array (
        'param' => 'Endurance',
        'val' => '1 000 000',
        'unit' => 'cycles',
      ),
    ),
  ),
  '28C64' => 
  array (
    'description' => '8K x 8 parallel EEPROM',
    'aliases' => 
    array (
    ),
    'package' => 'DIP',
    'pincount' => 28,
    'family' => 'memory',
    'datasheet' => 'http://www.atmel.com/dyn/resources/prod_documents/doc0001H.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'RDY/~BUSY~',
        'desc' => 'device status',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'A__12',
        'desc' => 'address input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A__7',
        'desc' => 'address input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'A__6',
        'desc' => 'address input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'A__5',
        'desc' => 'address input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'A__4',
        'desc' => 'address input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'A__3',
        'desc' => 'address input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'A__2',
        'desc' => 'address input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'A__1',
        'desc' => 'address input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'A__0',
        'desc' => 'address input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'I/O__0',
        'desc' => 'data input/output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'I/O__1',
        'desc' => 'data input/output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'I/O__2',
        'desc' => 'data input/output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'I/O__3',
        'desc' => 'data input/output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'I/O__4',
        'desc' => 'data input/output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'I/O__5',
        'desc' => 'data input/output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'I/O__6',
        'desc' => 'data input/output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'I/O__7',
        'desc' => 'data input/output',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => '~CE',
        'desc' => 'chip enable (active low)',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'A__10',
        'desc' => 'address input',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => '~OE',
        'desc' => 'output enable (active low)',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'A__11',
        'desc' => 'address input',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'A__9',
        'desc' => 'address input',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'A__8',
        'desc' => 'address input',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => '~WE',
        'desc' => 'write enable (active low)',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4001 => 
  array (
    'description' => 'Quad 2-input NOR gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4001b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3B',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '4Y',
        'desc' => 'data output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4B',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4002 => 
  array (
    'description' => 'Dual 4-input NOR gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4002b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1C',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1D',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2C',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2D',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  40106 => 
  array (
    'description' => 'Hex inverting Schmitt trigger',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef40106b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '4Y',
        'desc' => 'data output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '5Y',
        'desc' => 'data output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '5A',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '6Y',
        'desc' => 'data output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '6A',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4011 => 
  array (
    'description' => 'Quad 2-input NAND gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4011b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3B',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '4Y',
        'desc' => 'data output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4B',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4013 => 
  array (
    'description' => 'Dual D-type flip-flop with set and clear',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4013b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1Q',
        'desc' => 'true output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1~Q',
        'desc' => 'complement output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1CP',
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1CD',
        'desc' => 'asynchronous clear-direct input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1D',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1SD',
        'desc' => 'asynchronous set-direct input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '2SD',
        'desc' => 'asynchronous set-direct input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2D',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2CD',
        'desc' => 'asynchronous clear-direct input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2CP',
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2~Q',
        'desc' => 'complement output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2Q',
        'desc' => 'true output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4014 => 
  array (
    'description' => '8-bit static shift register',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4014b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'D7',
        'desc' => 'parallel data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Q5',
        'desc' => 'output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Q7',
        'desc' => 'output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D3',
        'desc' => 'parallel data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'D2',
        'desc' => 'parallel data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'D1',
        'desc' => 'parallel data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'D0',
        'desc' => 'parallel data input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'PE',
        'desc' => 'parallel enable input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'CP',
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'DS',
        'desc' => 'serial data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q6',
        'desc' => 'output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'D4',
        'desc' => 'parallel data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'D5',
        'desc' => 'parallel data input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'D6',
        'desc' => 'parallel data input',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4015 => 
  array (
    'description' => 'Dual 4-bit serial-in/parallel-out shift register',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4015b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '2CP',
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '2Q3',
        'desc' => 'parallel output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Q2',
        'desc' => 'parallel output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1Q1',
        'desc' => 'parallel output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1Q0',
        'desc' => 'parallel output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1MR',
        'desc' => 'master reset',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '1D',
        'desc' => 'serial data input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '1CP',
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '1Q3',
        'desc' => 'parallel output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2Q2',
        'desc' => 'parallel output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2Q1',
        'desc' => 'parallel output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2Q0',
        'desc' => 'parallel output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '2MR',
        'desc' => 'master reset',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '2D',
        'desc' => 'serial data input',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4017 => 
  array (
    'description' => 'Decade counter/divider with 10 decoded outputs',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.national.com/ds/CD/CD4017BC.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'Q5',
        'desc' => 'output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Q1',
        'desc' => 'output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Q0',
        'desc' => 'output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Q2',
        'desc' => 'output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Q6',
        'desc' => 'output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q7',
        'desc' => 'output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Q3',
        'desc' => 'output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Q8',
        'desc' => 'output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'Q4',
        'desc' => 'output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'Q9',
        'desc' => 'output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'CARRY',
        'desc' => 'carry output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '~CE',
        'desc' => 'clock enable (active low)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'CLOCK',
        'desc' => 'clock input (low-to-high, positive edge triggered)',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'RESET',
        'desc' => 'reset (active high)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '2 (CD4017)',
          1 => '77 (74HC4017)',
        ),
        'unit' => 'MHz',
      ),
    ),
  ),
  40193 => 
  array (
    'description' => '4-bit up/down binary counter',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef40193b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'D1',
        'desc' => 'parallel data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Q1',
        'desc' => 'count output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Q0',
        'desc' => 'count output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'CPD',
        'desc' => 'count-down clock input (low-to-high edge-triggered)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'CPU',
        'desc' => 'count-up clock input (low-to-high edge-triggered)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q2',
        'desc' => 'count output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Q3',
        'desc' => 'count output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'D3',
        'desc' => 'parallel data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'D2',
        'desc' => 'parallel data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '~PL',
        'desc' => 'parallel load (active low)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '~TCU',
        'desc' => 'terminal count-up (carry; active low)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '~TCD',
        'desc' => 'terminal count-down (borrow; active low)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'MR',
        'desc' => 'master reset',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'D0',
        'desc' => 'parallel data input',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => '~TCU goes low when the count is 15.',
      1 => '~TCD goes low when the count is 0.',
    ),
  ),
  4020 => 
  array (
    'description' => '14-stage binary counter',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4020b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'Q11',
        'desc' => 'output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Q12',
        'desc' => 'output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Q13',
        'desc' => 'output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Q5',
        'desc' => 'output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Q4',
        'desc' => 'output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q6',
        'desc' => 'output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Q3',
        'desc' => 'output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Q0',
        'desc' => 'output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '~CP',
        'desc' => 'clock input (high-to-low edge-triggered)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'MR',
        'desc' => 'master reset',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q8',
        'desc' => 'output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Q7',
        'desc' => 'output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Q9',
        'desc' => 'output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Q10',
        'desc' => 'output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4021 => 
  array (
    'description' => '8-bit static shift register',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4021b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'D7',
        'desc' => 'parallel data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Q5',
        'desc' => 'output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Q7',
        'desc' => 'output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D3',
        'desc' => 'parallel data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'D2',
        'desc' => 'parallel data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'D1',
        'desc' => 'parallel data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'D0',
        'desc' => 'parallel data input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'PL',
        'desc' => 'parallel load',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'CP',
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'DS',
        'desc' => 'serial data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q6',
        'desc' => 'output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'D4',
        'desc' => 'parallel data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'D5',
        'desc' => 'parallel data input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'D6',
        'desc' => 'parallel data input',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4023 => 
  array (
    'description' => 'Triple 3-input NAND gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4023b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1C',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '2C',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '3B',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '3C',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4024 => 
  array (
    'description' => '7-stage binary ripple counter',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4024b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~CP',
        'desc' => 'clock input (high-to-low edge-triggered)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'MR',
        'desc' => 'master reset',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Q6',
        'desc' => 'buffered parallel output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Q5',
        'desc' => 'buffered parallel output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Q4',
        'desc' => 'buffered parallel output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q3',
        'desc' => 'buffered parallel output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Q2',
        'desc' => 'buffered parallel output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'Q1',
        'desc' => 'buffered parallel output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q0',
        'desc' => 'buffered parallel output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4025 => 
  array (
    'description' => 'Triple 3-input NOR gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4025b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1C',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '2C',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '3B',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '3C',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4027 => 
  array (
    'description' => 'Dual J-K flip-flop with set and clear',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4027b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '2Q',
        'desc' => 'true output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '2~Q',
        'desc' => 'complement output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '2CP',
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2CD',
        'desc' => 'asynchronous clear-direct input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2K',
        'desc' => 'synchronous input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2J',
        'desc' => 'synchronous input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2SD',
        'desc' => 'asynchronous set-direct input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '1SD',
        'desc' => 'asynchronous set-direct input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '1J',
        'desc' => 'asynchronous input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '1K',
        'desc' => 'asynchronous input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '1CD',
        'desc' => 'asynchronous clear-direct input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '1CP',
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '1~Q',
        'desc' => 'complement output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '1Q',
        'desc' => 'true output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4028 => 
  array (
    'description' => 'BCD to decimal decoder',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4028b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'Y4',
        'desc' => 'output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Y2',
        'desc' => 'output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Y0',
        'desc' => 'output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Y7',
        'desc' => 'output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Y9',
        'desc' => 'output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Y5',
        'desc' => 'output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Y6',
        'desc' => 'output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Y8',
        'desc' => 'output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'A0',
        'desc' => 'BCD input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'A3',
        'desc' => 'BCD input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'A2',
        'desc' => 'BCD input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'A1',
        'desc' => 'BCD input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Y1',
        'desc' => 'output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Y3',
        'desc' => 'output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Outputs are active high.',
      1 => 'All outputs are low for BCD inputs greater than 9.',
    ),
  ),
  4029 => 
  array (
    'description' => 'Synchronous 4-bit up/down binary/decade counter',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4029b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'PL',
        'desc' => 'parallel load',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Q3',
        'desc' => 'buffered parallel output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'P3',
        'desc' => 'parallel data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'P0',
        'desc' => 'parallel data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '~CE',
        'desc' => 'count enable (active low)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q0',
        'desc' => 'buffered parallel output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '~TC',
        'desc' => 'terminal count output (active low)',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'BIN/~DEC',
        'desc' => 'binary/decade control input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'UP/~DN',
        'desc' => 'up/down control input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'Q1',
        'desc' => 'buffered parallel output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'P1',
        'desc' => 'parallel data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'P2',
        'desc' => 'parallel data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Q2',
        'desc' => 'buffered parallel output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'CP',
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4030 => 
  array (
    'description' => 'Quad 2-input XOR gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4030b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3B',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '4Y',
        'desc' => 'data output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4B',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4040 => 
  array (
    'description' => '12-stage binary ripple counter',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4040b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'Q11',
        'desc' => 'output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Q5',
        'desc' => 'output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Q4',
        'desc' => 'output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Q6',
        'desc' => 'output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Q3',
        'desc' => 'output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q2',
        'desc' => 'output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Q1',
        'desc' => 'output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Q0',
        'desc' => 'output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '~CP',
        'desc' => 'clock input (high-to-low edge-triggered)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'MR',
        'desc' => 'master reset (active high)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q8',
        'desc' => 'output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Q7',
        'desc' => 'output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Q9',
        'desc' => 'output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Q10',
        'desc' => 'output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4046 => 
  array (
    'description' => 'Phase-locked loop',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4046b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'PCP__OUT',
        'desc' => 'phase comparator pulse output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'PC1__OUT',
        'desc' => 'phase comparator 1 output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'COMP__IN',
        'desc' => 'comparator input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'VCO__OUT',
        'desc' => 'VCO output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'INH',
        'desc' => 'inhibit',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'C1__A',
        'desc' => 'capacitor C1 connection A',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'C1__B',
        'desc' => 'capacitor C1 Connection B',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'VCO__IN',
        'desc' => 'VCO input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'SF__OUT',
        'desc' => 'source-follower output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'R__1',
        'desc' => 'resistor R1 connection',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'R__2',
        'desc' => 'resistor R2 connection',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'PC2__OUT',
        'desc' => 'phase comparator 2 output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'SIGN__IN',
        'desc' => 'signal input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'ZENER',
        'desc' => 'zener diode input for regulated supply',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4047 => 
  array (
    'description' => 'Monostable/astable multivibrator',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4047b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'C',
        'desc' => 'capacitor connection',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'R',
        'desc' => 'resistor connection',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'RC COMMON',
        'desc' => 'resistor and capacitor common connection',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '~ASTABLE',
        'desc' => 'astable enable (active low)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'ASTABLE',
        'desc' => 'astable enable (active high)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '-TRIGGER',
        'desc' => 'monostable negative-edge trigger',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '+TRIGGER',
        'desc' => 'monostable positive-edge trigger',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'RESET',
        'desc' => 'external reset',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'Q',
        'desc' => 'output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '~Q',
        'desc' => 'complement output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'RETRIGGER',
        'desc' => 'monostable retrigger input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'OSC OUT',
        'desc' => 'oscillator (double frequency) output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4049 => 
  array (
    'description' => 'Hex inverting buffer',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4049b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '4Y',
        'desc' => 'data output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '5A',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '5Y',
        'desc' => 'data output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '6A',
        'desc' => 'data input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '6Y',
        'desc' => 'data output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
    ),
  ),
  4050 => 
  array (
    'description' => 'Hex non-inverting buffer',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4050b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '4Y',
        'desc' => 'data output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '5A',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '5Y',
        'desc' => 'data output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '6A',
        'desc' => 'data input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '6Y',
        'desc' => 'data output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
    ),
  ),
  4051 => 
  array (
    'description' => '8-channel analog multiplexer/demultiplexer',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4051b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'Y4',
        'desc' => 'independent input/output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Y6',
        'desc' => 'independent input/output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Z',
        'desc' => 'common input/output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Y7',
        'desc' => 'independent input/output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Y5',
        'desc' => 'independent input/output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '~E',
        'desc' => 'enable input (active low)',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'V__EE',
        'desc' => 'switch negative supply voltage',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'A2',
        'desc' => 'address input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'A1',
        'desc' => 'address input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'A0',
        'desc' => 'address input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Y3',
        'desc' => 'independent input/output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Y0',
        'desc' => 'independent input/output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Y1',
        'desc' => 'independent input/output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Y2',
        'desc' => 'independent input/output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'V__CC',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'The device contains eight bidirectional analog switches.',
      1 => 'The analog inputs/outputs can swing between V__CC and V__EE.',
      2 => 'When ~E is high, all switches are in a high-impedance off state.',
    ),
  ),
  4052 => 
  array (
    'description' => 'Dual 4-channel analog multiplexer/demultiplexer',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4052b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'Y__0B',
        'desc' => 'independent input/output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Y__2B',
        'desc' => 'independent input/output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Z__B',
        'desc' => 'common input/output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Y__3B',
        'desc' => 'independent input/output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Y__1B',
        'desc' => 'independent input/output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '~E',
        'desc' => 'enable input (active low)',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'V__EE',
        'desc' => 'switch negative supply voltage',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'A__1',
        'desc' => 'address input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'A__0',
        'desc' => 'address input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'Y__3A',
        'desc' => 'independent input/output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Y__0A',
        'desc' => 'independent input/output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Z__A',
        'desc' => 'common input/output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Y__1A',
        'desc' => 'independent input/output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Y__2A',
        'desc' => 'independent input/output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'V__CC',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'The device contains four bidirectional analog switches.',
      1 => 'The analog inputs/outputs can swing between V__CC and V__EE.',
      2 => 'When E is high, all switches are in a high-impedance off state.',
    ),
  ),
  4053 => 
  array (
    'description' => 'Triple 2-channel analog multiplexer/demultiplexer (triple SPDT analog switch)',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4053b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'Y__1B',
        'desc' => 'independent input/output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Y__0B',
        'desc' => 'independent input/output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Y__1C',
        'desc' => 'independent input/output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Z__C',
        'desc' => 'common input/output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Y__0C',
        'desc' => 'independent input/output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '~E',
        'desc' => 'enable input (active low)',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'V__EE',
        'desc' => 'switch negative supply voltage',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'S__C',
        'desc' => 'select input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'S__B',
        'desc' => 'select input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'S__A',
        'desc' => 'select input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Y__0A',
        'desc' => 'independent input/output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Y__1A',
        'desc' => 'independent input/output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Z__A',
        'desc' => 'common input/output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Z__B',
        'desc' => 'common input/output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'V__CC',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Each multiplexer/demultiplexer contains two bidirectional analog switches.',
      1 => 'The analog inputs/outputs can swing between V__CC and V__EE.',
      2 => 'When E is high, all switches are in a high-impedance off state.',
    ),
  ),
  4060 => 
  array (
    'description' => '14-stage ripple-carry binary counter/divider and oscillator',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4060b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'Q11',
        'desc' => 'counter output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Q12',
        'desc' => 'counter output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Q13',
        'desc' => 'counter output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Q5',
        'desc' => 'counter output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Q4',
        'desc' => 'counter output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q6',
        'desc' => 'counter output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Q3',
        'desc' => 'counter output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'C__TC',
        'desc' => 'external capacitor connection',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'R__TC',
        'desc' => 'oscillator pin',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'RS',
        'desc' => 'clock input/oscillator pin (high-to-low edge-triggered)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'MR',
        'desc' => 'master reset (active high)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Q__8',
        'desc' => 'counter output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Q__7',
        'desc' => 'counter output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Q__9',
        'desc' => 'counter output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4066 => 
  array (
    'description' => 'Quad bilateral switch',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.datasheetcatalog.org/datasheets/320/206765_DS.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'IN 1',
        'desc' => 'switch 1 input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'OUT 1',
        'desc' => 'switch 1 output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'OUT 2',
        'desc' => 'switch 2 output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'IN 2',
        'desc' => 'switch 2 input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'CONTROL 2',
        'desc' => 'switch 2 control',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'CONTROL 3',
        'desc' => 'switch 3 control',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'V__SS',
        'desc' => 'ground/negative supply voltage',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'IN 3',
        'desc' => 'switch 3 input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'OUT 3',
        'desc' => 'switch 3 output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'OUT 4',
        'desc' => 'switch 4 output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'IN 4',
        'desc' => 'switch 4 input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'CONTROL 4',
        'desc' => 'switch 4 control',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'CONTROL 1',
        'desc' => 'switch 1 control',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'V__DD',
        'desc' => 'positive supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum switching frequency',
        'val' => '40',
        'unit' => 'MHz',
      ),
      1 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '18',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Maximum switch through current',
        'val' => '± 25',
        'unit' => 'mA',
      ),
    ),
  ),
  4067 => 
  array (
    'description' => '16-channel analog multiplexer/demultiplexer',
    'package' => 'DIP',
    'pincount' => 24,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4067b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'Z',
        'desc' => 'common input/output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Y7',
        'desc' => 'independent input/output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Y6',
        'desc' => 'independent input/output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Y5',
        'desc' => 'independent input/output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Y4',
        'desc' => 'independent input/output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Y3',
        'desc' => 'independent input/output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Y2',
        'desc' => 'independent input/output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'Y1',
        'desc' => 'independent input/output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Y0',
        'desc' => 'independent input/output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'A0',
        'desc' => 'address input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'A1',
        'desc' => 'address input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'A3',
        'desc' => 'address input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'A2',
        'desc' => 'address input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~E',
        'desc' => 'enable input (active low)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Y15',
        'desc' => 'independent input/output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'Y14',
        'desc' => 'independent input/output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'Y13',
        'desc' => 'independent input/output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'Y12',
        'desc' => 'independent input/output',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Y11',
        'desc' => 'independent input/output',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'Y10',
        'desc' => 'independent input/output',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'Y9',
        'desc' => 'independent input/output',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'Y8',
        'desc' => 'independent input/output',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'V__CC',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'The device contains sixteen bidirectional analog switches.',
      1 => 'The analog inputs/outputs can swing between V__CC and GND.',
      2 => 'When ~E is high, all switches are in a high-impedance off state.',
    ),
  ),
  4068 => 
  array (
    'description' => '8-input NAND gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4068b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'I__0',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'I__1',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'I__2',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'I__3',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'I__4',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'I__5',
        'desc' => 'data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'I__6',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'I__7',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Y',
        'desc' => 'data output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4069 => 
  array (
    'description' => 'Hex inverter',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4069ub.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '4Y',
        'desc' => 'data output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '5Y',
        'desc' => 'data output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '5A',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '6Y',
        'desc' => 'data output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '6A',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4070 => 
  array (
    'description' => 'Quad 2-input XOR gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4070b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3B',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '4Y',
        'desc' => 'data output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4B',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4071 => 
  array (
    'description' => 'Quad 2-input OR gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4071b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3B',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '4Y',
        'desc' => 'data output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4B',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4072 => 
  array (
    'description' => 'Dual 4-input OR gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4072b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1C',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1D',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2C',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2D',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4073 => 
  array (
    'description' => 'Triple 3-input AND gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4073b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1C',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '2C',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '3B',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '3C',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4075 => 
  array (
    'description' => 'Triple 3-input OR gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4075b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1C',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '2C',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '3B',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '3C',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4077 => 
  array (
    'description' => 'Quad 2-input XNOR gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4077b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3B',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '4Y',
        'desc' => 'data output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4B',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4081 => 
  array (
    'description' => 'Quad 2-input AND gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4081b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3B',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '4Y',
        'desc' => 'data output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4B',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4082 => 
  array (
    'description' => 'Dual 4-input AND gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4082b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1C',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1D',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2C',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2D',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4085 => 
  array (
    'description' => 'Dual 2-wide 2-input AND-OR-INVERT gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/cd4085b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'A1',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'B1',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Q1',
        'desc' => 'data output (see note)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Q2',
        'desc' => 'data output (see note)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'A2',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'B2',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'C2',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'D2',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'INH1',
        'desc' => 'inhibit',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'INH2',
        'desc' => 'inhibit',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'C1',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'D1',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Q = <span class=\'neg\'>INH OR (A AND B) OR (C AND D)</span>',
    ),
  ),
  4093 => 
  array (
    'description' => 'Quad 2-input NAND Schmitt trigger',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4093b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3B',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '4Y',
        'desc' => 'data output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4B',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4094 => 
  array (
    'description' => '8-stage shift-and-store bus register',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4094b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'STR',
        'desc' => 'strobe input (active high)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'D',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'CP',
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'QP0',
        'desc' => 'parallel output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'QP1',
        'desc' => 'parallel output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'QP2',
        'desc' => 'parallel output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'QP3',
        'desc' => 'parallel output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'QS1',
        'desc' => 'serial output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'QS2',
        'desc' => 'serial output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'QP7',
        'desc' => 'parallel output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'QP6',
        'desc' => 'parallel output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'QP5',
        'desc' => 'parallel output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'QP4',
        'desc' => 'parallel output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'OE',
        'desc' => 'output enable',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage (active high)',
      ),
    ),
  ),
  4099 => 
  array (
    'description' => '8-bit addressable latch',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/cd4099b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'Q7',
        'desc' => 'latch output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'RESET',
        'desc' => 'master reset (all bits to 0; active high)',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'DATA',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '~WRITE',
        'desc' => 'write enable (active low)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'A0',
        'desc' => 'address input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'A1',
        'desc' => 'address input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'A2',
        'desc' => 'address input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Q0',
        'desc' => 'latch output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'Q1',
        'desc' => 'latch output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'Q2',
        'desc' => 'latch output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q3',
        'desc' => 'latch output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Q4',
        'desc' => 'latch output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Q5',
        'desc' => 'latch output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Q6',
        'desc' => 'latch output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4511 => 
  array (
    'description' => 'BCD to 7-segment latch/decoder/driver',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4511b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'D1',
        'desc' => 'BCD input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'D2',
        'desc' => 'BCD input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '~LT',
        'desc' => 'lamp test (lights all segments, active low)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '~BL',
        'desc' => 'blank (active low)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'LE',
        'desc' => 'latch enable (active high)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'D3',
        'desc' => 'BCD input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'D0',
        'desc' => 'BCD input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Qe',
        'desc' => 'segment output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'Qd',
        'desc' => 'segment output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'Qc',
        'desc' => 'segment output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Qb',
        'desc' => 'segment output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Qa',
        'desc' => 'segment output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Qf',
        'desc' => 'segment output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Qg',
        'desc' => 'segment output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Pins for lit segments are high. The 4511 can directly drive a common cathode LED display.',
      1 => 'Display is blanked for inputs greater than 9.',
    ),
  ),
  4514 => 
  array (
    'description' => '1-of-16 decoder/demultiplexer with input latches',
    'package' => 'DIP',
    'pincount' => 24,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4514b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'LE',
        'desc' => 'latch enable (active high)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'A0',
        'desc' => 'address input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A1',
        'desc' => 'address input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Q7',
        'desc' => 'output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Q6',
        'desc' => 'output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q5',
        'desc' => 'output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Q4',
        'desc' => 'output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'Q3',
        'desc' => 'output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Q1',
        'desc' => 'output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'Q2',
        'desc' => 'output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'Q0',
        'desc' => 'output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Q13',
        'desc' => 'output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Q12',
        'desc' => 'output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Q15',
        'desc' => 'output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Q14',
        'desc' => 'output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'Q9',
        'desc' => 'output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'Q8',
        'desc' => 'output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'Q11',
        'desc' => 'output',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Q10',
        'desc' => 'output',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'A2',
        'desc' => 'address input',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'A3',
        'desc' => 'address input',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => '~E',
        'desc' => 'enable (active low)',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Outputs are mutually exclusive active high.',
      1 => 'When ~E is high, all outputs are low.',
    ),
  ),
  4515 => 
  array (
    'description' => '1-of-16 decoder/demultiplexer with input latches; inverting',
    'package' => 'DIP',
    'pincount' => 24,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4515b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'LE',
        'desc' => 'latch enable (active high)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'A0',
        'desc' => 'address input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A1',
        'desc' => 'address input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '~Q~7',
        'desc' => 'output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '~Q~6',
        'desc' => 'output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '~Q~5',
        'desc' => 'output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '~Q~4',
        'desc' => 'output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '~Q~3',
        'desc' => 'output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '~Q~1',
        'desc' => 'output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '~Q~2',
        'desc' => 'output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '~Q~0',
        'desc' => 'output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '~Q~13',
        'desc' => 'output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '~Q~12',
        'desc' => 'output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~Q~15',
        'desc' => 'output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => '~Q~14',
        'desc' => 'output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => '~Q~9',
        'desc' => 'output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => '~Q~8',
        'desc' => 'output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => '~Q~11',
        'desc' => 'output',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => '~Q~10',
        'desc' => 'output',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'A2',
        'desc' => 'address input',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'A3',
        'desc' => 'address input',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => '~E',
        'desc' => 'enable (active low)',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Outputs are mutually exclusive active low.',
      1 => 'When ~E is high, all outputs are high.',
    ),
  ),
  4516 => 
  array (
    'description' => '4-bit binary up/down counter',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4516b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'PL',
        'desc' => 'parallel load (active high)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Q3',
        'desc' => 'count output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'D3',
        'desc' => 'parallel input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D0',
        'desc' => 'parallel input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '~CE',
        'desc' => 'count enable (active low)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q0',
        'desc' => 'count output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '~TC',
        'desc' => 'terminal count output (active low)',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'MR',
        'desc' => 'master reset (active high)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'UP/~DN',
        'desc' => 'up/down count control',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'Q1',
        'desc' => 'count output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'D1',
        'desc' => 'parallel input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'D2',
        'desc' => 'parallel input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Q2',
        'desc' => 'count output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'CP',
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'When counting up, ~TC goes low when the count is 15.',
      1 => 'When counting down, ~TC goes low when the count is 0.',
      2 => '~TC is always high when ~CE is high (counting is disabled).',
    ),
  ),
  4518 => 
  array (
    'description' => 'Dual synchronous BCD counter',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4518b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1CP0',
        'desc' => 'counter 1 clock input (low-to-high triggered)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1~CP~1',
        'desc' => 'counter 1 clock input (high-to-low triggered)',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Q0',
        'desc' => 'counter 1 output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1Q1',
        'desc' => 'counter 1 output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1Q2',
        'desc' => 'counter 1 output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1Q3',
        'desc' => 'counter 1 output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '1MR',
        'desc' => 'counter 1 master reset (active high)',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2CP0',
        'desc' => 'counter 2 clock input (low-to-high triggered)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2~CP~1',
        'desc' => 'counter 2 clock input (high-to-low triggered)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2Q0',
        'desc' => 'counter 2 output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2Q1',
        'desc' => 'counter 2 output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2Q2',
        'desc' => 'counter 2 output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '2Q3',
        'desc' => 'counter 2 output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '2MR',
        'desc' => 'counter 2 master reset (active high)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'The 4518 counts from 0 to 9. The 4520 is identical but counts from 0 to 15.',
      1 => 'Either nCP0 or n~CP~1 may be used as the clock input; the other can be used as a clock enable input.',
      2 => 'If n~CP~1 is high, the counter advances on a low-to-high transition of nCP0.',
      3 => 'If nCP0 is low, the counter advances on a high-to-low transition of n~CP~1.',
    ),
  ),
  4520 => 
  array (
    'description' => 'Dual 4-bit synchronous binary counter',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4520b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1CP0',
        'desc' => 'counter 1 clock input (low-to-high triggered)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1~CP~1',
        'desc' => 'counter 1 clock input (high-to-low triggered)',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Q0',
        'desc' => 'counter 1 output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1Q1',
        'desc' => 'counter 1 output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1Q2',
        'desc' => 'counter 1 output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1Q3',
        'desc' => 'counter 1 output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '1MR',
        'desc' => 'counter 1 master reset (active high)',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2CP0',
        'desc' => 'counter 2 clock input (low-to-high triggered)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2~CP~1',
        'desc' => 'counter 2 clock input (high-to-low triggered)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2Q0',
        'desc' => 'counter 2 output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2Q1',
        'desc' => 'counter 2 output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2Q2',
        'desc' => 'counter 2 output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '2Q3',
        'desc' => 'counter 2 output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '2MR',
        'desc' => 'counter 2 master reset (active high)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'The 4520 counts from 0 to 15. The 4518 is identical but counts from 0 to 9.',
      1 => 'Either nCP0 or n~CP~1 may be used as the clock input; the other can be used as a clock enable input.',
      2 => 'If n~CP~1 is high, the counter advances on a low-to-high transition of nCP0.',
      3 => 'If nCP0 is low, the counter advances on a high-to-low transition of n~CP~1.',
    ),
  ),
  4526 => 
  array (
    'description' => 'Programmable 4-bit binary down counter',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4526b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'Q3',
        'desc' => 'count output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'P3',
        'desc' => 'parallel input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'PL',
        'desc' => 'parallel load (active high)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '~CP~1',
        'desc' => 'clock input (high-to-low triggered)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'P0',
        'desc' => 'parallel input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'CP0',
        'desc' => 'clock input (low-to-high triggered)',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Q0',
        'desc' => 'count output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Q1',
        'desc' => 'count output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'MR',
        'desc' => 'asynchronous master reset (active high)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'P1',
        'desc' => 'parallel input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'TC',
        'desc' => 'terminal count output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'CF',
        'desc' => 'cascade feedback input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'P2',
        'desc' => 'parallel input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Q2',
        'desc' => 'count output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'When ~CP~1 is low, the counter advances on a low-to-high transition of CP0.',
      1 => 'When CP0 is high, the counter advances on a high-to-low transition of ~CP~1.',
      2 => 'TC goes high when the count is 0, CF is high, and PL is low.',
      3 => 'For a single-stage divide-by-n circuit, connect the TC output to PL and set the P0-P3 inputs to n.',
    ),
  ),
  4528 => 
  array (
    'description' => 'Dual retriggerable monostable multivibrator with reset',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4528b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1CEXT',
        'desc' => 'external capacitor connection (connect to capacitor and ground)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1REXT/CEXT',
        'desc' => 'external capacitor/resistor connection',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1~CD',
        'desc' => 'clear direct input (active low)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1B',
        'desc' => 'input (low-to-high triggered)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1~A',
        'desc' => 'input (high-to-low triggered)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1Q',
        'desc' => 'output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '1~Q',
        'desc' => 'complementary output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2~Q',
        'desc' => 'complementary output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2Q',
        'desc' => 'output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2~A',
        'desc' => 'input (high-to-low triggered)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2B',
        'desc' => 'input (low-to-high triggered)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2~CD',
        'desc' => 'clear direct input (active low)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '2REXT/CEXT',
        'desc' => 'external capacitor/resistor connection',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '2CEXT',
        'desc' => 'external capacitor connection (connect to capacitor and ground)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'External timing resistor R__EXT',
        'val' => 
        array (
          0 => '5 (min)',
          1 => '2000 (max)',
        ),
        'unit' => 'kΩ',
      ),
      1 => 
      array (
        'param' => 'Pulse width variation, Vcc = 5V',
        'val' => '±3',
        'unit' => '%',
      ),
    ),
    'notes' => 
    array (
      0 => 'Connect a timing capacitor C__EXT between nCEXT and nREXT/CEXT.',
      1 => 'Connect a resistor R__EXT between nREXT/CEXT and Vcc.',
      2 => 'A high-to-low transition on n~A when nB is low causes a pulse on nQ and n~Q.',
      3 => 'A low-to-high transition on nB when n~A is high causes a pulse on nQ and n~Q.',
      4 => 'Setting n~CD low inhibits pulses.',
      5 => '(CD4528) For C__EXT > 0.01 µF and Vcc = 5V, output pulse width = 0.2 × R__EXT × C__EXT.',
      6 => '(HEF4528) For C__EXT > 0.01 µF and Vcc = 5V, output pulse width = 0.42 × R__EXT × C__EXT.',
    ),
  ),
  4538 => 
  array (
    'description' => 'Dual retriggerable precision monostable multivibrator with reset',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4538b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1CEXT',
        'desc' => 'external capacitor connection (connect to capacitor and ground)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1REXT/CEXT',
        'desc' => 'external capacitor/resistor connection',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1~CD',
        'desc' => 'clear direct input (active low)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1B',
        'desc' => 'input (low-to-high triggered)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1~A',
        'desc' => 'input (high-to-low triggered)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1Q',
        'desc' => 'output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '1~Q',
        'desc' => 'complementary output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2~Q',
        'desc' => 'complementary output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2Q',
        'desc' => 'output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2~A',
        'desc' => 'input (high-to-low triggered)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2B',
        'desc' => 'input (low-to-high triggered)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2~CD',
        'desc' => 'clear direct input (active low)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '2REXT/CEXT',
        'desc' => 'external capacitor/resistor connection',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '2CEXT',
        'desc' => 'external capacitor connection (connect to capacitor and ground)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'External timing resistor R__EXT',
        'val' => '5 (min)',
        'unit' => 'kΩ',
      ),
      1 => 
      array (
        'param' => 'External timing capacitor C__EXT',
        'val' => '2000 (min)',
        'unit' => 'pF',
      ),
      2 => 
      array (
        'param' => 'Pulse width variation, Vcc = 5V',
        'val' => '±0.2',
        'unit' => '%',
      ),
    ),
    'notes' => 
    array (
      0 => 'Connect a timing capacitor C__EXT between nCEXT and nREXT/CEXT.',
      1 => 'Connect a resistor R__EXT between nREXT/CEXT and Vcc.',
      2 => 'A high-to-low transition on n~A when nB is low causes a pulse on nQ and n~Q.',
      3 => 'A low-to-high transition on nB when n~A is high causes a pulse on nQ and n~Q.',
      4 => 'Setting n~CD low inhibits pulses.',
      5 => 'Output pulse width = R__EXT × C__EXT.',
      6 => '(74HC4538) Output pulse width = 0.7 × R__EXT × C__EXT.',
    ),
  ),
  4541 => 
  array (
    'description' => 'Programmable timer',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4541b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'R__TC',
        'desc' => 'external resistor connection (R__t)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'C__TC',
        'desc' => 'external capacitor connection (C__t)',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'RS',
        'desc' => 'external resistor connection (R__S) or external clock input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '~AR',
        'desc' => 'auto reset input (active low)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'MR',
        'desc' => 'master reset input (active high)',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'O',
        'desc' => 'output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'PH',
        'desc' => 'phase input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'MODE',
        'desc' => 'mode select (single cycle or continuous)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'A0',
        'desc' => 'divider input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'A1',
        'desc' => 'divider input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Frequency range',
        'val' => 
        array (
          0 => '1 (min)',
          1 => '100k (max)',
        ),
        'unit' => 'Hz',
      ),
      1 => 
      array (
        'param' => 'External capacitor C__t',
        'val' => '100 (min)',
        'unit' => 'pF',
      ),
      2 => 
      array (
        'param' => 'External resistor R__t',
        'val' => 
        array (
          0 => '10k (min)',
          1 => '1M (max)',
        ),
        'unit' => 'Ω',
      ),
    ),
    'notes' => 
    array (
      0 => 'The RC oscillator frequency is 1/(2.3 × R__t &times C__t). R__S = 2R__t.',
      1 => 'An external clock signal, connected to RS, may be used instead. The timer advances on the low-to-high transition of RS.',
      2 => 'The input frequency is divided by a value determined by A1A0: 2<sup>13</sup> (LL), 2<sup>10</sup> (LH), 2<sup>8</sup> (HL), or 2<sup>16</sup> (HH).',
      3 => 'Power-on reset is enabled when ~AR and MR are low. For HEF4541, Vcc should be above 8.5V for correct power-on reset.',
      4 => 'PH specifies the state of the output after reset (high or low).',
      5 => 'When MODE is high, the output oscillates continuously.',
      6 => 'When MODE is low, the output changes only once, after a single cycle.',
    ),
  ),
  4555 => 
  array (
    'description' => 'Dual 1-of-4 decoder/demultiplexer',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4555b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1~E',
        'desc' => 'enable input (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1A__0',
        'desc' => 'address input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1A__1',
        'desc' => 'address input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1Y__0',
        'desc' => 'output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1Y__1',
        'desc' => 'output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1Y__2',
        'desc' => 'output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '1Y__3',
        'desc' => 'output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2Y__3',
        'desc' => 'output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2Y__2',
        'desc' => 'output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2Y__1',
        'desc' => 'output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2Y__0',
        'desc' => 'output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2A__1',
        'desc' => 'address input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '2A__0',
        'desc' => 'address input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '2~E',
        'desc' => 'enable input (active low)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Outputs are mutually exclusive, active high.',
      1 => 'When n~E is high, all outputs nY are low.',
    ),
  ),
  4556 => 
  array (
    'description' => 'Dual 1-of-4 decoder/demultiplexer; inverting',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4556b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1~E',
        'desc' => 'enable input (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1A__0',
        'desc' => 'address input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1A__1',
        'desc' => 'address input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1~Y~__0',
        'desc' => 'output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1~Y~__1',
        'desc' => 'output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1~Y~__2',
        'desc' => 'output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '1~Y~__3',
        'desc' => 'output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2~Y~__3',
        'desc' => 'output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2~Y~__2',
        'desc' => 'output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2~Y~__1',
        'desc' => 'output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2~Y~__0',
        'desc' => 'output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2A__1',
        'desc' => 'address input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '2A__0',
        'desc' => 'address input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '2~E',
        'desc' => 'enable input (active low)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Outputs are mutually exclusive, active low.',
      1 => 'When n~E is high, all outputs n~Y~ are high.',
    ),
  ),
  4557 => 
  array (
    'description' => '1-to-64 bit variable length shift register',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4557b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'L__2',
        'desc' => 'length control input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'L__1',
        'desc' => 'length control input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'MR',
        'desc' => 'asynchronous master reset',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'CP__0',
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '~CP~__1',
        'desc' => 'clock input (high-to-low edge-triggered)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'D__B',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'D__A',
        'desc' => 'data input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'A/~B',
        'desc' => 'select data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'Q',
        'desc' => 'output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '~Q',
        'desc' => 'complementary output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'L__32',
        'desc' => 'length input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'L__16',
        'desc' => 'length input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'L__8',
        'desc' => 'length input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'L__4',
        'desc' => 'length input',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'The length of the shift register is determined by the sum of the length inputs (L__1, L__2, L__4, L__8, L__16, L__32) plus one.',
      1 => 'Data is shifted in on the low-to-high transition of CP__0 when ~CP~__1 is low, or the high-to-low transition of ~CP~__1 when CP__0 is high.',
      2 => 'When A/~B is high, a clock pulse shifts in data from D__A. When low, a clock pulse shifts in data from D__B.',
      3 => 'When MR is high, the register is reset, Q is forced low, and ~Q is forced high.',
    ),
  ),
  4572 => 
  array (
    'description' => 'Hex gate (four inverters, one 2-input NOR gate, one 2-input NAND gate)',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/cd4572ub.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~A',
        'desc' => 'inverter 1 output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'A',
        'desc' => 'inverter 1 input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '~B',
        'desc' => 'inverter 2 output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'B',
        'desc' => 'inverter 2 input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'C NOR D',
        'desc' => 'NOR gate output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'C',
        'desc' => 'NOR gate input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'D',
        'desc' => 'NOR gate input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '~E',
        'desc' => 'inverter 3 output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'E',
        'desc' => 'inverter 3 input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '~F',
        'desc' => 'inverter 4 output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'F',
        'desc' => 'inverter 4 input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'G NAND H',
        'desc' => 'NAND gate output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'G',
        'desc' => 'NAND gate input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'H',
        'desc' => 'NAND gate input',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  4585 => 
  array (
    'description' => '4-bit magnitude comparator',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '4000',
    'datasheet' => 'http://www.standardics.nxp.com/products/hef/datasheet/hef4585b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'B__2',
        'desc' => 'word B input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'A__2',
        'desc' => 'word A input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Q__A=B',
        'desc' => 'A = B output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'I__A>B',
        'desc' => 'A > B expansion input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'I__A<B',
        'desc' => 'A < B expansion input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'I__A=B',
        'desc' => 'A = B expansion input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'A__1',
        'desc' => 'word A input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'B__1',
        'desc' => 'word B input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'A__0',
        'desc' => 'word A input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'B__0',
        'desc' => 'word B input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q__A<B',
        'desc' => 'A < B output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Q__A>B',
        'desc' => 'A > B output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'B__3',
        'desc' => 'word B input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'A__3',
        'desc' => 'word A input',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'The least significant (or only) comparator in a chain should have I__A=B and I__A>B tied high and I__A<B tied low.',
      1 => 'To compare more than 4 bits, connect Q__A<B and Q__A=B to the inputs of the next significant comparator. I__A>B of the next significant comparator should be tied high.',
    ),
  ),
  '4N35M' => 
  array (
    'description' => 'Phototransistor output optocoupler',
    'aliases' => 
    array (
      0 => '4N25M',
      1 => '4N26M',
      2 => '4N27M',
      3 => '4N35',
      4 => '4N36M',
      5 => '4N37M',
      6 => 'H11A1M',
      7 => 'H11A2M',
      8 => 'H11A3M',
      9 => 'H11A4M',
      10 => 'H11A5M',
    ),
    'package' => 'DIP',
    'pincount' => 6,
    'family' => 'Fairchild',
    'datasheet' => 'http://www.fairchildsemi.com/ds/4N/4N35-M.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'A',
        'desc' => 'anode',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'K',
        'desc' => 'cathode',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'E',
        'desc' => 'emitter',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'C',
        'desc' => 'collector',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'B',
        'desc' => 'base',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Input forward voltage, typical',
        'val' => '1.18',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Input forward voltage, maximum',
        'val' => '1.5',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Input current, maximum',
        'val' => '60',
        'unit' => 'ma',
      ),
      3 => 
      array (
        'param' => 'Current transfer ratio, collector to emitter',
        'val' => 
        array (
          0 => '100 (4N35M',
          1 => '4N36M',
          2 => '4N37M)',
          3 => '50 (H11A1M)',
          4 => '30 (H11A5M)',
          5 => '20 (4N25M',
          6 => '4N26M',
          7 => 'H11A2M',
          8 => 'H11A3M)',
          9 => '10 (4N27M',
          10 => '4N28M',
          11 => 'H11A4M)',
        ),
        'unit' => '',
      ),
    ),
  ),
  54374 => 
  array (
    'description' => 'Octal D-type edge-triggered flip-flops with 3-state outputs',
    'package' => 'DIP',
    'pincount' => 20,
    'family' => '5400',
    'datasheet' => 'http://www.alldatasheet.com/datasheet-pdf/pdf/27731/TI/SN54ALS374A.html',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~OE',
        'desc' => 'output enable (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1Q',
        'desc' => 'flip-flop output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1D',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2D',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2Q',
        'desc' => 'flip-flop output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '3Q',
        'desc' => 'flip-flop output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '3D',
        'desc' => 'data input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '4D',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '4Q',
        'desc' => 'flip-flop output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'CLK',
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '5Q',
        'desc' => 'flip-flop output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '5D',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '6D',
        'desc' => 'data input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '6Q',
        'desc' => 'flip-flop output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => '7Q',
        'desc' => 'flip-flop output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => '7D',
        'desc' => 'data input',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'D8D7',
        'desc' => 'data input',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => '8Q',
        'desc' => 'flip-flop output',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Supply Voltage range',
        'val' => 
        array (
          0 => '-0.5 to 7',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Input Voltage range',
        'val' => 
        array (
          0 => '-0.5 to 7',
        ),
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Recommended Voltage range',
        'val' => 
        array (
          0 => '4.5 to 5.5',
        ),
        'unit' => 'V',
      ),
      3 => 
      array (
        'param' => 'High level input voltage',
        'val' => 
        array (
          0 => '2',
        ),
        'unit' => 'V',
      ),
      4 => 
      array (
        'param' => 'Low-level input voltage',
        'val' => 
        array (
          0 => '0.7 (54AL)',
          1 => '0.8 (74AL)',
        ),
        'unit' => 'V',
      ),
      5 => 
      array (
        'param' => 'High-level output current',
        'val' => 
        array (
          0 => '-1 (54AL)',
          1 => '-2.6 (74AL)',
        ),
        'unit' => 'mA',
      ),
      6 => 
      array (
        'param' => 'Low-level output current',
        'val' => 
        array (
          0 => '12 (54AL)',
          1 => '24 (74AL)',
        ),
        'unit' => 'mA',
      ),
      7 => 
      array (
        'param' => 'Operating Temp',
        'val' => 
        array (
          0 => '-55 to +125 (54AL)',
          1 => '0 to +70 (74AL)',
        ),
        'unit' => 'degC',
      ),
    ),
    'notes' => 
    array (
      0 => '~OE does not affect internal operations of the flip-flops. Old data can be retained or new data can be entered while the outputs are in the high-impedance state',
      1 => 'released april 1982, revised november 1999',
    ),
  ),
  555 => 
  array (
    'description' => 'Timer',
    'package' => 'DIP',
    'pincount' => 8,
    'datasheet' => 'http://www.datasheetcatalog.org/datasheet/philips/NE_SA_SE555_C_2.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'TRIG',
        'desc' => 'trigger',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'OUT',
        'desc' => 'output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '~RESET',
        'desc' => 'reset (active low)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'CV',
        'desc' => 'control voltage',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'THR',
        'desc' => 'threshold',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'DIS',
        'desc' => 'discharge',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '18',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Maximum output current (NE555)',
        'val' => '200',
        'unit' => 'mA',
      ),
      2 => 
      array (
        'param' => 'Power dissipation',
        'val' => '600',
        'unit' => 'mW',
      ),
    ),
    'notes' => 
    array (
      0 => 'In monostable mode, pulse width ≈ 1.1RC',
      1 => 'In astable mode, frequency = 1/(0.693*C*(R1+2*R2))',
      2 => 'In astable mode, pulse high time = 0.693*(R1+R2)*C',
      3 => 'In astable mode, pulse low time = 0.693*R2*C',
    ),
  ),
  556 => 
  array (
    'description' => 'Dual timer',
    'package' => 'DIP',
    'pincount' => 14,
    'datasheet' => 'http://www.national.com/ds/LM/LM556.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'DIS 1',
        'desc' => 'discharge (timer 1)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'THR 1',
        'desc' => 'threshold (timer 1)',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'CV 1',
        'desc' => 'control voltage (timer 1)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '~RESET~ 1',
        'desc' => 'reset (active low, timer 1)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'OUT 1',
        'desc' => 'output (timer 1)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'TRIG 1',
        'desc' => 'trigger (timer 1)',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'TRIG 2',
        'desc' => 'trigger (timer 2)',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'OUT 2',
        'desc' => 'output (timer 2)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '~RESET~ 2',
        'desc' => 'reset (active low, timer 2)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'CV 2',
        'desc' => 'control voltage (timer 2)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'THR 2',
        'desc' => 'threshold (timer 2)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'DIS 2',
        'desc' => 'discharge (timer 2)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'The 556 contains two 555 timers.',
    ),
  ),
  62256 => 
  array (
    'description' => '32K x 8 static RAM',
    'aliases' => 
    array (
    ),
    'package' => 'DIP',
    'pincount' => 28,
    'family' => 'memory',
    'datasheet' => 'http://web.mit.edu/6.115/www/datasheets/62256.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'A__14',
        'desc' => 'address input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'A__12',
        'desc' => 'address input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A__7',
        'desc' => 'address input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'A__6',
        'desc' => 'address input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'A__5',
        'desc' => 'address input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'A__4',
        'desc' => 'address input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'A__3',
        'desc' => 'address input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'A__2',
        'desc' => 'address input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'A__1',
        'desc' => 'address input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'A__0',
        'desc' => 'address input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'I/O__0',
        'desc' => 'data input/output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'I/O__1',
        'desc' => 'data input/output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'I/O__2',
        'desc' => 'data input/output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'I/O__3',
        'desc' => 'data input/output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'I/O__4',
        'desc' => 'data input/output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'I/O__5',
        'desc' => 'data input/output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'I/O__6',
        'desc' => 'data input/output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'I/O__7',
        'desc' => 'data input/output',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => '~CE',
        'desc' => 'chip enable (active low)',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'A__10',
        'desc' => 'address input',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => '~OE',
        'desc' => 'output enable (active low)',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'A__11',
        'desc' => 'address input',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'A__9',
        'desc' => 'address input',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'A__8',
        'desc' => 'address input',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'A__13',
        'desc' => 'address input',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => '~WE',
        'desc' => 'write enable (active low)',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Data is written when ~CE is low and ~WE is low.',
      1 => 'Data is read when ~CE is low, ~OE is low, and ~WE is high.',
      2 => 'The input/output pins assume a high-impedance state if ~CE is high.',
    ),
  ),
  6264 => 
  array (
    'description' => '8K x 8 static RAM',
    'aliases' => 
    array (
    ),
    'package' => 'DIP',
    'pincount' => 28,
    'family' => 'memory',
    'datasheet' => 'http://web.mit.edu/6.115/www/datasheets/6264.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'A__4',
        'desc' => 'address input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A__5',
        'desc' => 'address input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'A__6',
        'desc' => 'address input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'A__7',
        'desc' => 'address input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'A__8',
        'desc' => 'address input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'A__9',
        'desc' => 'address input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'A__10',
        'desc' => 'address input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'A__11',
        'desc' => 'address input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'A__12',
        'desc' => 'address input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'I/O__0',
        'desc' => 'data input/output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'I/O__1',
        'desc' => 'data input/output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'I/O__2',
        'desc' => 'data input/output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'I/O__3',
        'desc' => 'data input/output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'I/O__4',
        'desc' => 'data input/output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'I/O__5',
        'desc' => 'data input/output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'I/O__6',
        'desc' => 'data input/output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'I/O__7',
        'desc' => 'data input/output',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => '~CE~__1',
        'desc' => 'chip enable (active low)',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'A__0',
        'desc' => 'address input',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => '~OE',
        'desc' => 'output enable (active low)',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'A__1',
        'desc' => 'address input',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'A__2',
        'desc' => 'address input',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'A__3',
        'desc' => 'address input',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'CE__2',
        'desc' => 'chip enable (active high)',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => '~WE',
        'desc' => 'write enable (active low)',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Data is written when ~CE~__1 is low, ~WE is low, and CE__2 is high.',
      1 => 'Data is read whem ~CE~__1 is low, ~OE is low, and CE__2 is high.',
      2 => 'The input/output pins assume a high-impedance state if the chip is not selected and/or ~OE is low.',
    ),
  ),
  628128 => 
  array (
    'description' => '128K x 8 static RAM',
    'aliases' => 
    array (
    ),
    'package' => 'DIP',
    'pincount' => 32,
    'family' => 'memory',
    'datasheet' => 'http://www.futurlec.com/Datasheet/Memory/628128.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'A__16',
        'desc' => 'address input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A__14',
        'desc' => 'address input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'A__12',
        'desc' => 'address input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'A__7',
        'desc' => 'address input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'A__6',
        'desc' => 'address input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'A__5',
        'desc' => 'address input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'A__4',
        'desc' => 'address input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'A__3',
        'desc' => 'address input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'A__2',
        'desc' => 'address input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'A__1',
        'desc' => 'address input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'A__0',
        'desc' => 'address input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'I/O__0',
        'desc' => 'data input/output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'I/O__1',
        'desc' => 'data input/output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'I/O__2',
        'desc' => 'data input/output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'I/O__3',
        'desc' => 'data input/output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'I/O__4',
        'desc' => 'data input/output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'I/O__5',
        'desc' => 'data input/output',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'I/O__6',
        'desc' => 'data input/output',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'I/O__7',
        'desc' => 'data input/output',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => '~CS1',
        'desc' => 'chip select (active low)',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'A__10',
        'desc' => 'address input',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => '~OE',
        'desc' => 'output enable (active low)',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'A__11',
        'desc' => 'address input',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'A__9',
        'desc' => 'address input',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'A__8',
        'desc' => 'address input',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'A__13',
        'desc' => 'address input',
      ),
      28 => 
      array (
        'num' => '29',
        'sym' => '~WE',
        'desc' => 'write enable (active low)',
      ),
      29 => 
      array (
        'num' => '30',
        'sym' => 'CS2',
        'desc' => 'chip select (active high)',
      ),
      30 => 
      array (
        'num' => '31',
        'sym' => 'A__15',
        'desc' => 'address input',
      ),
      31 => 
      array (
        'num' => '32',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Data is written when ~CS1 is low, CS2 is high, and ~WE is low.',
      1 => 'Data is read when ~CS1 is low, CS2 is high, ~OE is low, and ~WE is high.',
      2 => 'The input/output pins assume a high-impedance state if ~CS1 is high or CS2 is low.',
    ),
  ),
  628512 => 
  array (
    'description' => '512K x 8 static RAM',
    'aliases' => 
    array (
      0 => 'AS6C4008',
    ),
    'package' => 'DIP',
    'pincount' => 32,
    'family' => 'memory',
    'datasheet' => 'http://www.futurlec.com/Datasheet/Memory/628512.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'A__18',
        'desc' => 'address input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'A__16',
        'desc' => 'address input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A__14',
        'desc' => 'address input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'A__12',
        'desc' => 'address input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'A__7',
        'desc' => 'address input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'A__6',
        'desc' => 'address input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'A__5',
        'desc' => 'address input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'A__4',
        'desc' => 'address input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'A__3',
        'desc' => 'address input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'A__2',
        'desc' => 'address input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'A__1',
        'desc' => 'address input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'A__0',
        'desc' => 'address input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'I/O__0',
        'desc' => 'data input/output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'I/O__1',
        'desc' => 'data input/output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'I/O__2',
        'desc' => 'data input/output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'I/O__3',
        'desc' => 'data input/output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'I/O__4',
        'desc' => 'data input/output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'I/O__5',
        'desc' => 'data input/output',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'I/O__6',
        'desc' => 'data input/output',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'I/O__7',
        'desc' => 'data input/output',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => '~CS',
        'desc' => 'chip select (active low)',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'A__10',
        'desc' => 'address input',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => '~OE',
        'desc' => 'output enable (active low)',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'A__11',
        'desc' => 'address input',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'A__9',
        'desc' => 'address input',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'A__8',
        'desc' => 'address input',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'A__13',
        'desc' => 'address input',
      ),
      28 => 
      array (
        'num' => '29',
        'sym' => '~WE',
        'desc' => 'write enable (active low)',
      ),
      29 => 
      array (
        'num' => '30',
        'sym' => 'A__17',
        'desc' => 'address input',
      ),
      30 => 
      array (
        'num' => '31',
        'sym' => 'A__15',
        'desc' => 'address input',
      ),
      31 => 
      array (
        'num' => '32',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Data is written when ~CS is low and ~WE is low.',
      1 => 'Data is read when ~CS is low, ~OE is low, and ~WE is high.',
      2 => 'The input/output pins assume a high-impedance state if ~CS is high.',
    ),
  ),
  6522 => 
  array (
    'description' => 'Versatile Interface Adapter',
    'aliases' => 
    array (
      0 => 'W65C22',
    ),
    'package' => 'DIP',
    'pincount' => 40,
    'family' => 'MOS Technology',
    'datasheet' => 'http://www.westerndesigncenter.com/wdc/documentation/w65c22.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'PA0',
        'desc' => 'port A',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'PA1',
        'desc' => 'port A',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'PA2',
        'desc' => 'port A',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'PA3',
        'desc' => 'port A',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'PA4',
        'desc' => 'port A',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'PA5',
        'desc' => 'port A',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'PA6',
        'desc' => 'port A',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'PA7',
        'desc' => 'port A',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'PB0',
        'desc' => 'port B',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'PB1',
        'desc' => 'port B',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'PB2',
        'desc' => 'port B',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'PB3',
        'desc' => 'port B',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'PB4',
        'desc' => 'port B',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'PB5',
        'desc' => 'port B',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'PB6',
        'desc' => 'port B (pulse counting input for timer 2)',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'PB7',
        'desc' => 'port B (controllable by timer 1)',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'CB1',
        'desc' => 'port B control (shift register clock)',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'CB2',
        'desc' => 'port B control (shift register data)',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => '~IRQ',
        'desc' => 'interrupt request output*',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'R/~W',
        'desc' => 'read/write select',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => '~CS2',
        'desc' => 'chip select (active low)',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'CS1',
        'desc' => 'chip select (active high)',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => '∅2',
        'desc' => 'phase-2 clock input',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'D7',
        'desc' => 'data bus',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'D6',
        'desc' => 'data bus',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'D5',
        'desc' => 'data bus',
      ),
      28 => 
      array (
        'num' => '29',
        'sym' => 'D4',
        'desc' => 'data bus',
      ),
      29 => 
      array (
        'num' => '30',
        'sym' => 'D3',
        'desc' => 'data bus',
      ),
      30 => 
      array (
        'num' => '31',
        'sym' => 'D2',
        'desc' => 'data bus',
      ),
      31 => 
      array (
        'num' => '32',
        'sym' => 'D1',
        'desc' => 'data bus',
      ),
      32 => 
      array (
        'num' => '33',
        'sym' => 'D0',
        'desc' => 'data bus',
      ),
      33 => 
      array (
        'num' => '34',
        'sym' => '~RES',
        'desc' => 'reset (active low)',
      ),
      34 => 
      array (
        'num' => '35',
        'sym' => 'RS3',
        'desc' => 'register select (address bus)',
      ),
      35 => 
      array (
        'num' => '36',
        'sym' => 'RS2',
        'desc' => 'register select (address bus)',
      ),
      36 => 
      array (
        'num' => '37',
        'sym' => 'RS1',
        'desc' => 'register select (address bus)',
      ),
      37 => 
      array (
        'num' => '38',
        'sym' => 'RS0',
        'desc' => 'register select (address bus)',
      ),
      38 => 
      array (
        'num' => '39',
        'sym' => 'CA2',
        'desc' => 'port A control',
      ),
      39 => 
      array (
        'num' => '40',
        'sym' => 'CA1',
        'desc' => 'port A control',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '1 (NMOS)',
          1 => '14 (W65C22)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'In older chips, ~IRQ was an open drain output. In the W65C22S, it is fully driven.',
      1 => 'Registers:
<table>
<tr><td>$00</td><td>Output register B (write), input register B (read)</td></tr>
<tr><td>$01</td><td>Output register A (write), input register A (read)</td></tr>
<tr><td>$02</td><td>Data direction register B</td></tr>
<tr><td>$03</td><td>Data direction register A</td></tr>
<tr><td>$04</td><td>Timer 1 latch LSB (write), timer 1 counter LSB (read)</td></tr>
<tr><td>$05</td><td>Timer 1 counter MSB</td></tr>
<tr><td>$06</td><td>Timer 1 latch LSB</td></tr>
<tr><td>$07</td><td>Timer 1 latch MSB</td></tr>
<tr><td>$08</td><td>Timer 2 latch LSB (write), timer 2 counter LSB (read)</td></tr>
<tr><td>$09</td><td>Timer 2 counter MSB</td></tr>
<tr><td>$0A</td><td>Shift register</td></tr>
<tr><td>$0B</td><td>Auxiliary control register</td></tr>
<tr><td>$0C</td><td>Peripheral control register</td></tr>
<tr><td>$0D</td><td>Interrupt flag register</td></tr>
<tr><td>$0E</td><td>Interrupt enable register</td></tr>
<tr><td>$0F</td><td>Same as register $01, but with no effect on handshake</td></tr>
</table>',
      2 => 'Timer 1 can operate in one-shot mode or free-running mode (square wave).',
      3 => 'Timer 2 can operate in one-shot mode or pulse-counting mode (counts negative pulses on PB6).',
      4 => 'Counters for timers in one-shot or free-running mode decrement at the ∅2 clock rate.',
      5 => 'The shift register is 8 bits wide, can shift in or out, and can generate its own clock or shift under the control of an external clock on CB1.',
    ),
  ),
  6581 => 
  array (
    'description' => 'Sound Interface Device (SID)',
    'aliases' => 
    array (
      0 => 'SID',
    ),
    'package' => 'DIP',
    'pincount' => 28,
    'family' => 'MOS Technology',
    'datasheet' => 'http://www.waitingforfriday.com/index.php/Commodore_SID_6581_Datasheet',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'CAP1A',
        'desc' => 'capacitor C1 connection',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'CAP1B',
        'desc' => 'capacitor C1 connection',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'CAP2A',
        'desc' => 'capacitor C2 connection',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'CAP2B',
        'desc' => 'capacitor C2 connection',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '~RES',
        'desc' => 'master reset',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '∅2',
        'desc' => 'master clock',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'R/~W',
        'desc' => 'read/write select',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '~CS',
        'desc' => 'chip select (active low)',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'A0',
        'desc' => 'address bus (register select)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'A1',
        'desc' => 'address bus (register select)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'A2',
        'desc' => 'address bus (register select)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'A3',
        'desc' => 'address bus (register select)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'A4',
        'desc' => 'address bus (register select)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'D0',
        'desc' => 'data bus',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'D1',
        'desc' => 'data bus',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'D2',
        'desc' => 'data bus',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'D3',
        'desc' => 'data bus',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'D4',
        'desc' => 'data bus',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'D5',
        'desc' => 'data bus',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'D6',
        'desc' => 'data bus',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'D7',
        'desc' => 'data bus',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'POTY',
        'desc' => 'Y-axis potentiometer input',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'POTX',
        'desc' => 'X-axis potentiometer input',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'Vcc',
        'desc' => '+5VDC supply',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'EXT IN',
        'desc' => 'external audio input',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'AUDIO OUT',
        'desc' => 'audio output',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'Vdd',
        'desc' => '+12VDC supply',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Minimum clock cycle time',
        'val' => '1',
        'unit' => 'µs',
      ),
    ),
    'notes' => 
    array (
      0 => 'C1 and C2 are integrating capacitors for the filter; polystyrene capacitors are preferred.',
      1 => 'C1 and C2 should have the same value. 2200 pF gives good operation over the audio range (30Hz-12kHz).',
      2 => 'Filter cutoff frequency is approx. 2.6×10<sup>-5</sup>/C (where C is the value of C1 or C2).',
      3 => 'POTX and POTY pins must be connected to RC networks; the time constant RC should be 4.7×10<sup>-4</sup>. Recommended capacitor value is 1000 pF, recommended potentiometer value is 470 kΩ.',
      4 => 'Maximum audio output level is approx. 3V p-p at a 6V DC level. A 1kΩ resistor should be connected from AUDIO OUT to ground, and a 1-10µF electrolytic capacitor should be used for AC coupling.',
      5 => 'Registers:
<table>
<tr><td>$00</td><td>Voice 1 frequency low byte</td></tr>
<tr><td>$01</td><td>Voice 1 frequency high byte</td></tr>
<tr><td>$02</td><td>Voice 1 pulse width low byte</td></tr>
<tr><td>$03</td><td>Voice 1 pulse width high byte (bits 3-0)</td></tr>
<tr><td>$04</td><td>Voice 1 control (gate, sync, ring mod, waveform)</td></tr>
<tr><td>$05</td><td>Voice 1 attack/decay rates</td></tr>
<tr><td>$06</td><td>Voice 1 sustain level/release rate</td></tr>
<tr><td>$07</td><td>Voice 2 frequency low byte</td></tr>
<tr><td>$08</td><td>Voice 2 frequency high byte</td></tr>
<tr><td>$09</td><td>Voice 2 pulse width low byte</td></tr>
<tr><td>$0A</td><td>Voice 2 pulse width high byte (bits 3-0)</td></tr>
<tr><td>$0B</td><td>Voice 2 control (gate, sync, ring mod, waveform)</td></tr>
<tr><td>$0C</td><td>Voice 2 attack/decay rates</td></tr>
<tr><td>$0D</td><td>Voice 2 sustain level/release rate</td></tr>
<tr><td>$0E</td><td>Voice 3 frequency low byte</td></tr>
<tr><td>$0F</td><td>Voice 3 frequency high byte</td></tr>
<tr><td>$10</td><td>Voice 3 pulse width low byte</td></tr>
<tr><td>$11</td><td>Voice 3 pulse width high byte (bits 3-0)</td></tr>
<tr><td>$12</td><td>Voice 3 control (gate, sync, ring mod, waveform)</td></tr>
<tr><td>$13</td><td>Voice 3 attack/decay rates</td></tr>
<tr><td>$14</td><td>Voice 3 sustain level/release rate</td></tr>
<tr><td>$15</td><td>Filter cutoff frequency low byte</td></tr>
<tr><td>$16</td><td>Filter cutoff frequency high byte (bits 2-0)</td></tr>
<tr><td>$17</td><td>Filter resonance/control</td></tr>
<tr><td>$18</td><td>Filter mode/volume control</td></tr>
<tr><td>$19</td><td>POTX value (0-255), updated every 512 clock cycles</td></tr>
<tr><td>$1A</td><td>POTY value (0-255), updated every 512 clock cycles</td></tr>
<tr><td>$1B</td><td>Upper 8 bits of Oscillator 3 value (random number if noise waveform is selected)</td></tr>
<tr><td>$1C</td><td>Upper 8 bits of Voice 3 envelope generator value</td></tr>
</table>',
      6 => 'Oscillator frequency = (Fn × Fclk/16777216) Hz',
      7 => 'Pulse width = (PWn/40.95) %',
    ),
  ),
  '6809E' => 
  array (
    'description' => '8-bit microprocessor',
    'aliases' => 
    array (
      0 => '68A09E',
      1 => '68B09E',
    ),
    'package' => 'DIP',
    'pincount' => 40,
    'family' => 'Motorola',
    'datasheet' => 'http://www.classiccmp.org/dunfield/r/6809e.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'Vss',
        'desc' => 'ground',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '~NMI',
        'desc' => 'non-maskable interrupt (active low)',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '~IRQ',
        'desc' => 'interrupt request (active low)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '~FIRQ',
        'desc' => 'fast interrupt request (active low)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'BS',
        'desc' => 'bus status output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'BA',
        'desc' => 'bus available output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'A0',
        'desc' => 'address bus',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'A1',
        'desc' => 'address bus',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'A2',
        'desc' => 'address bus',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'A3',
        'desc' => 'address bus',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'A4',
        'desc' => 'address bus',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'A5',
        'desc' => 'address bus',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'A6',
        'desc' => 'address bus',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'A7',
        'desc' => 'address bus',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'A8',
        'desc' => 'address bus',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'A9',
        'desc' => 'address bus',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'A10',
        'desc' => 'address bus',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'A11',
        'desc' => 'address bus',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'A12',
        'desc' => 'address bus',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'A13',
        'desc' => 'address bus',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'A14',
        'desc' => 'address bus',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'A15',
        'desc' => 'address bus',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'D7',
        'desc' => 'data bus',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'D6',
        'desc' => 'data bus',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'D5',
        'desc' => 'data bus',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'D4',
        'desc' => 'data bus',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'D3',
        'desc' => 'data bus',
      ),
      28 => 
      array (
        'num' => '29',
        'sym' => 'D2',
        'desc' => 'data bus',
      ),
      29 => 
      array (
        'num' => '30',
        'sym' => 'D1',
        'desc' => 'data bus',
      ),
      30 => 
      array (
        'num' => '31',
        'sym' => 'D0',
        'desc' => 'data bus',
      ),
      31 => 
      array (
        'num' => '32',
        'sym' => 'R/~W',
        'desc' => 'bus read/write',
      ),
      32 => 
      array (
        'num' => '33',
        'sym' => 'BUSY',
        'desc' => 'busy status',
      ),
      33 => 
      array (
        'num' => '34',
        'sym' => 'E',
        'desc' => 'clock input',
      ),
      34 => 
      array (
        'num' => '35',
        'sym' => 'Q',
        'desc' => 'quadrature clock input',
      ),
      35 => 
      array (
        'num' => '36',
        'sym' => 'AVMA',
        'desc' => 'advanced VMA signal (indicates bus will be used in the next cycle)',
      ),
      36 => 
      array (
        'num' => '37',
        'sym' => '~RESET',
        'desc' => 'reset (active low)',
      ),
      37 => 
      array (
        'num' => '38',
        'sym' => 'LIC',
        'desc' => 'last instruction cycle (high during last cycle of instruction)',
      ),
      38 => 
      array (
        'num' => '39',
        'sym' => 'TSC',
        'desc' => 'three-state control (active high; tri-states address, data, R/~W~)',
      ),
      39 => 
      array (
        'num' => '40',
        'sym' => '~HALT',
        'desc' => 'halt (active low)',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Clock speed',
        'val' => 
        array (
          0 => '1 (6809E)',
          1 => '1.5 (68A09E)',
          2 => '2 (68B09E)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'Registers:
<table>
<tr><td>A, B</td><td>8-bit Accumulators (can be combined into 16-bit accumulator, D)</td></tr>
<tr><td>X</td><td>16-bit Index Register</td></tr>
<tr><td>Y</td><td>16-bit Index Register</td></tr>
<tr><td>U</td><td>16-bit User Stack Pointer</td></tr>
<tr><td>S</td><td>16-bit Hardware Stack Pointer</td></tr>
<tr><td>PC</td><td>16-bit Program Counter</td></tr>
<tr><td>DP</td><td>8-bit Direct Page Register</td></tr>
<tr><td>CC</td><td>8-bit Condition Code Register</td></tr>
</table><br/>',
      1 => 'Condition code bits: EFHINZVC
<table>
<tr><td>E</td><td>(bit 7)</td><td>Entire machine state was stacked</td></tr>
<tr><td>F</td><td>(bit 6)</td><td>~FIRQ inhibit flag</td></tr>
<tr><td>H</td><td>(bit 5)</td><td>Half-carry flag (valid only after ADC or ADD instructions)</td></tr>
<tr><td>I</td><td>(bit 4)</td><td>~IRQ inhibit flag</td></tr>
<tr><td>N</td><td>(bit 3)</td><td>Negative flag (most significant bit of previous result)</td></tr>
<tr><td>Z</td><td>(bit 2)</td><td>Zero flag</td></tr>
<tr><td>V</td><td>(bit 1)</td><td>Signed two\'s complement overflow flag</td></tr>
<tr><td>C</td><td>(bit 0)</td><td>Carry flag</td></tr>
</table><br/>',
      2 => 'Register stacking order:
<table>
<tr><td>CC</td><td>(pulled first, pushed last)</td></tr>
<tr><td>A</td><td></td></tr>
<tr><td>B</td><td></td></tr>
<tr><td>DP</td><td></td></tr>
<tr><td>X msb</td><td></td></tr>
<tr><td>X lsb</td><td></td></tr>
<tr><td>Y msb</td><td></td></tr>
<tr><td>Y lsb</td><td></td></tr>
<tr><td>U/S msb</td><td></td></tr>
<tr><td>U/S lsb</td><td></td></tr>
<tr><td>PC msb</td><td></td></tr>
<tr><td>PC lsb</td><td>(pulled last, pushed first)</td></tr>
</table><br/>',
      3 => 'Interrupt vectors:
<table>
<tr><td>FFFE-FFFF</td><td>~RESET</td></tr>
<tr><td>FFFC-FFFD</td><td>~NMI</td></tr>
<tr><td>FFFA-FFFB</td><td>SWI</td></tr>
<tr><td>FFF8-FFF9</td><td>~IRQ</td></tr>
<tr><td>FFF6-FFF7</td><td>~FIRQ</td></tr>
<tr><td>FFF4-FFF5</td><td>SWI2</td></tr>
<tr><td>FFF2-FFF3</td><td>SWI3</td></tr>
<tr><td>FFF1-FFF1</td><td>Reserved</td></tr>
</table>',
    ),
  ),
  6821 => 
  array (
    'description' => 'Peripheral interface adapter',
    'aliases' => 
    array (
      0 => '68A21',
      1 => '68B21',
    ),
    'package' => 'DIP',
    'pincount' => 40,
    'family' => 'Motorola',
    'datasheet' => 'http://www.jameco.com/Jameco/Products/ProdDS/43596MOT.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'PA0',
        'desc' => 'port A',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'PA1',
        'desc' => 'port A',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'PA2',
        'desc' => 'port A',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'PA3',
        'desc' => 'port A',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'PA4',
        'desc' => 'port A',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'PA5',
        'desc' => 'port A',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'PA6',
        'desc' => 'port A',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'PA7',
        'desc' => 'port A',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'PB0',
        'desc' => 'port B',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'PB1',
        'desc' => 'port B',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'PB2',
        'desc' => 'port B',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'PB3',
        'desc' => 'port B',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'PB4',
        'desc' => 'port B',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'PB5',
        'desc' => 'port B',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'PB6',
        'desc' => 'port B',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'PB7',
        'desc' => 'port B',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'CB1',
        'desc' => 'peripheral control (port B)',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'CB2',
        'desc' => 'peripheral control (port B)',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'R/~W',
        'desc' => 'read/write',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'CS0',
        'desc' => 'chip select (active high)',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => '~CS2',
        'desc' => 'chip select (active low)',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'CS1',
        'desc' => 'chip select (active high)',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'E',
        'desc' => 'clock',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'D7',
        'desc' => 'data bus',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'D6',
        'desc' => 'data bus',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'D5',
        'desc' => 'data bus',
      ),
      28 => 
      array (
        'num' => '29',
        'sym' => 'D4',
        'desc' => 'data bus',
      ),
      29 => 
      array (
        'num' => '30',
        'sym' => 'D3',
        'desc' => 'data bus',
      ),
      30 => 
      array (
        'num' => '31',
        'sym' => 'D2',
        'desc' => 'data bus',
      ),
      31 => 
      array (
        'num' => '32',
        'sym' => 'D1',
        'desc' => 'data bus',
      ),
      32 => 
      array (
        'num' => '33',
        'sym' => 'D0',
        'desc' => 'data bus',
      ),
      33 => 
      array (
        'num' => '34',
        'sym' => '~RESET',
        'desc' => 'master reset (active low)',
      ),
      34 => 
      array (
        'num' => '35',
        'sym' => 'RS1',
        'desc' => 'register select (address bus)',
      ),
      35 => 
      array (
        'num' => '36',
        'sym' => 'RS0',
        'desc' => 'register select (address bus)',
      ),
      36 => 
      array (
        'num' => '37',
        'sym' => '~IRQB',
        'desc' => 'interrupt output (active low)',
      ),
      37 => 
      array (
        'num' => '38',
        'sym' => '~IRQA',
        'desc' => 'interrupt output (active low)',
      ),
      38 => 
      array (
        'num' => '39',
        'sym' => 'CA2',
        'desc' => 'peripheral control (port A)',
      ),
      39 => 
      array (
        'num' => '40',
        'sym' => 'CA1',
        'desc' => 'peripheral control (port A)',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Max. clock frequency',
        'val' => 
        array (
          0 => '1 (6821)',
          1 => '1.5 (68A21)',
          2 => '2 (68B21)',
        ),
        'unit' => 'MHz',
      ),
      1 => 
      array (
        'param' => 'Pulse width, E low',
        'val' => 
        array (
          0 => '430 (6821)',
          1 => '280 (68A21)',
          2 => '210 (68B21)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Pulse width, E high',
        'val' => 
        array (
          0 => '450 (6821)',
          1 => '280 (68A21)',
          2 => '220 (68B21)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Min. ~RESET pulse length',
        'val' => '1',
        'unit' => 'µs',
      ),
    ),
    'notes' => 
    array (
      0 => 'Port A is designed to drive CMOS logic to normal 30%/70% levels.',
      1 => 'Port B uses three-state NMOS buffers and requires external resistors to pull up to CMOS levels.',
      2 => 'Port B is capable of driving Darlingtons.',
      3 => 'When in output mode, a read of Port A returns the actual pin states.',
      4 => 'When in output mode, a read of Port B returns the contents of the output latch.',
      5 => 'RS=00, bit 2 of control register A=1: peripheral register A',
      6 => 'RS=00, bit 2 of control register A=0: data direction register A',
      7 => 'RS=01: control register A',
      8 => 'RS=10, bit 2 of control register B=1: peripheral register B',
      9 => 'RS=10, bit 2 of control register B=0: data direction register B',
      10 => 'RS=11: control register B',
    ),
  ),
  '6N137' => 
  array (
    'description' => '10 MBit/s single-channel high speed logic gate output optocoupler',
    'aliases' => 
    array (
      0 => 'HCPL2601',
      1 => 'HCPL2611',
    ),
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'Fairchild',
    'datasheet' => 'http://www.fairchildsemi.com/ds/6N/6N137.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'N/C',
        'desc' => 'no connection',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'V__F +',
        'desc' => 'emitter, anode',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'V__F -',
        'desc' => 'emitter, cathode',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'N/C',
        'desc' => 'no connection',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'GND',
        'desc' => 'supply ground',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'V__O',
        'desc' => 'output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'V__E',
        'desc' => 'enable input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Supply voltage, minimum',
        'val' => '4.5',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Supply voltage, maxmimum',
        'val' => '5.5',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Input forward voltage, typical @ 25C',
        'val' => '1.4',
        'unit' => 'V',
      ),
      3 => 
      array (
        'param' => 'Input forward voltage, typical @ 25C',
        'val' => '1.4',
        'unit' => 'V',
      ),
      4 => 
      array (
        'param' => 'Input forward voltage, max',
        'val' => '1.8',
        'unit' => 'V',
      ),
    ),
  ),
  7400 => 
  array (
    'description' => 'Quad 2-input NAND gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/74HC_HCT00_3.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3B',
        'desc' => 'data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '4Y',
        'desc' => 'data output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4B',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA, nB to nY',
        'val' => 
        array (
          0 => '7 (74HC)',
          1 => '10 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  7402 => 
  array (
    'description' => 'Quad 2-input NOR gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/74HC_HCT02_3.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3B',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4B',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4Y',
        'desc' => 'data output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA, nB to nY',
        'val' => 
        array (
          0 => '7 (74HC)',
          1 => '9 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  7404 => 
  array (
    'description' => 'Hex inverter',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/74HC_HCT04_3.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '4Y',
        'desc' => 'data output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '5Y',
        'desc' => 'data output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '5A',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '6Y',
        'desc' => 'data output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '6A',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA to nY',
        'val' => 
        array (
          0 => '7 (74HC)',
          1 => '8 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  7408 => 
  array (
    'description' => 'Quad 2-input AND gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/74HC_HCT08_3.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3B',
        'desc' => 'data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '4Y',
        'desc' => 'data output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4B',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA, nB to nY',
        'val' => 
        array (
          0 => '7 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  741 => 
  array (
    'description' => 'Operational amplifier',
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM741.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'OFFSET NULL',
        'desc' => 'offset null',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'IN-',
        'desc' => 'inverting input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'IN+',
        'desc' => 'non-inverting input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Vss',
        'desc' => 'negative supply voltage',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'OFFSET NULL',
        'desc' => 'offset null',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'OUT',
        'desc' => 'output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Vcc',
        'desc' => 'positive supply voltage',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Supply voltage',
        'val' => 
        array (
          0 => '±10 (min)',
          1 => '±22 (max)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Maximum input voltage',
        'val' => '±15',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Gain bandwidth',
        'val' => '1',
        'unit' => 'MHz',
      ),
      3 => 
      array (
        'param' => 'Slew rate',
        'val' => '0.5',
        'unit' => 'V/µs',
      ),
      4 => 
      array (
        'param' => 'Supply current',
        'val' => '1.7',
        'unit' => 'mA',
      ),
    ),
    'notes' => 
    array (
      0 => 'A 10 kΩ potentiometer connected to pins 1 and 5 can be used to null any offset voltage.',
    ),
  ),
  7410 => 
  array (
    'description' => 'Triple 3-input NAND gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/74HC_HCT10_CNV_2.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2C',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3B',
        'desc' => 'data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '3C',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '1C',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA, nB, nC to nY',
        'val' => 
        array (
          0 => '9 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74107 => 
  array (
    'description' => 'Dual J-K flip-flop with reset; negative-edge trigger',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc107.74hct107.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1J',
        'desc' => 'synchronous input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1~Q',
        'desc' => 'complement output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Q',
        'desc' => 'true output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1K',
        'desc' => 'synchronous input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2Q',
        'desc' => 'true output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2~Q',
        'desc' => 'complement output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '2J',
        'desc' => 'synchronous input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2~CP',
        'desc' => 'clock input (high-to-low, edge-triggered)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2~R',
        'desc' => 'asynchronous reset (active low)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2K',
        'desc' => 'synchronous input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '1~CP',
        'desc' => 'clock input (high-to-low, edge-triggered)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '1~R',
        'desc' => 'asynchronous reset (active low)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, n~CP to nQ',
        'val' => 
        array (
          0 => '16 (74HC)',
          1 => '16 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, n~CP to n~Q',
        'val' => 
        array (
          0 => '16 (74HC)',
          1 => '18 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, n~R to nQ, n~Q',
        'val' => 
        array (
          0 => '16 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '78 (74HC)',
          1 => '73 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
  ),
  74109 => 
  array (
    'description' => 'Dual J-K flip-flop with set and reset; positive-edge trigger',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc109.74hct109.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1~R~__D',
        'desc' => 'asynchronous reset; direct input (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1J',
        'desc' => 'synchronous input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1~K',
        'desc' => 'synchronous input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1CP',
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1~S~__D',
        'desc' => 'asynchronous set; direct input (active low)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1Q',
        'desc' => 'true output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '1~Q',
        'desc' => 'complement output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2~Q',
        'desc' => 'complement output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2Q',
        'desc' => 'true output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2~S~__D',
        'desc' => 'asynchronous set; direct input (active low)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2CP',
        'desc' => 'clock input (low-to-high, active low)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2~K',
        'desc' => 'synchronous input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '2J',
        'desc' => 'synchronous input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '2~R~__D',
        'desc' => 'asynchronous reset; direct input (active low)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nCP to nQ, n~Q',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, n~S~__D to nQ, n~Q',
        'val' => 
        array (
          0 => '12 (74HC)',
          1 => '14 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, n~R~__D to nQ, n~Q',
        'val' => 
        array (
          0 => '12 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '75 (74HC)',
          1 => '61 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
  ),
  7411 => 
  array (
    'description' => 'Triple 3-input AND gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc11.74hct11.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2C',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3B',
        'desc' => 'data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '3C',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '1C',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA, nB, nC to nY',
        'val' => 
        array (
          0 => '10 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74112 => 
  array (
    'description' => 'Dual J-K flip-flop with set and reset; negative-edge trigger',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc112.74hct112.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1~CP',
        'desc' => 'clock input (high-to-low, edge-triggered)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1K',
        'desc' => 'synchronous input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1J',
        'desc' => 'synchronous input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1~S~__D',
        'desc' => 'asynchronous set; direct input (active low)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1Q',
        'desc' => 'true output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1~Q',
        'desc' => 'complement output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2~Q',
        'desc' => 'complement output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2Q',
        'desc' => 'true output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2~S~__D',
        'desc' => 'asynchronous set; direct input (active low)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2J',
        'desc' => 'synchronous input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2K',
        'desc' => 'synchronous input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2~CP',
        'desc' => 'clock input (high-to-low, edge-triggered)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '2~R~__D',
        'desc' => 'asynchronous reset; direct input (active low)',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '1~R~__D',
        'desc' => 'asynchronous reset; direct input (active low)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, n~CP to nQ, n~Q',
        'val' => 
        array (
          0 => '17 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, n~S~__D to nQ, n~Q',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, n~R~__D to nQ, n~Q',
        'val' => 
        array (
          0 => '18 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '66 (74HC)',
          1 => '70 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
  ),
  74123 => 
  array (
    'description' => 'Dual retriggerable monostable multivibrator with reset',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc123.74hct123.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1~A',
        'desc' => 'negative-edge triggered input 1',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1B',
        'desc' => 'positive-edge triggered input 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1~R~D',
        'desc' => 'direct reset (active low) and positive-edge triggered input 1',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1~Q',
        'desc' => 'active low output 1',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2Q',
        'desc' => 'active high output 2',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2CEXT',
        'desc' => 'external capacitor connection 2',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2REXT/CEXT',
        'desc' => 'external resistor and capacitor connection 2',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2~A',
        'desc' => 'negative-edge triggered input 2',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2B',
        'desc' => 'positive-edge triggered input 2',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2~R~D',
        'desc' => 'direct reset (active low) and positive-edge triggered input 2',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2~Q',
        'desc' => 'active low output 2',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '1Q',
        'desc' => 'active high output 1',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '1CEXT',
        'desc' => 'external capacitor connection 1',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '1REXT/CEXT',
        'desc' => 'external resistor and capacitor connection 1',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, n~R~D, n~A, nB to nQ or n~Q',
        'val' => 
        array (
          0 => '26 (74HC/HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, n~R~D to nQ or n~Q',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '23 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Output transition time',
        'val' => 
        array (
          0 => '7 (74HC/HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Retrigger time n~A, nB',
        'val' => 
        array (
          0 => '110 (74HC/HCT)',
        ),
        'unit' => 'ns',
      ),
      4 => 
      array (
        'param' => 'External timing resistor',
        'val' => 
        array (
          0 => '2 (min)',
          1 => '1000 (max)',
        ),
        'unit' => 'kΩ',
      ),
    ),
  ),
  74125 => 
  array (
    'description' => 'Quad buffer/line driver with active low output enable; 3-state',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc125.74hct125.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1~OE',
        'desc' => 'output enable (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2~OE',
        'desc' => 'output enable (active low)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3~OE',
        'desc' => 'output enable (active low)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '4Y',
        'desc' => 'data output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4~OE',
        'desc' => 'output enable (active low)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA to nY',
        'val' => 
        array (
          0 => '9 (74HC)',
          1 => '12 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74126 => 
  array (
    'description' => 'Quad buffer/line driver with active high output enable; 3-state',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc126.74hct126.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1OE',
        'desc' => 'output enable (active high)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2OE',
        'desc' => 'output enable (active high)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3OE',
        'desc' => 'output enable (active high)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '4Y',
        'desc' => 'data output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4OE',
        'desc' => 'output enable (active high)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA to nY',
        'val' => 
        array (
          0 => '9 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74132 => 
  array (
    'description' => 'Quad 2-input NAND Schmitt trigger',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc132.74hct132.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3B',
        'desc' => 'data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '4Y',
        'desc' => 'data output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4B',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA, nB to nY',
        'val' => 
        array (
          0 => '10 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74137 => 
  array (
    'description' => '3-to-8 line decoder/demultiplexer with address latches; inverting',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc137.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'A0',
        'desc' => 'data input 0',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'A1',
        'desc' => 'data input 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A2',
        'desc' => 'data input 2',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '~LE',
        'desc' => 'latch enable input (active low)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '~E~1',
        'desc' => 'data enable input 1 (active low)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'E2',
        'desc' => 'data enable input 2 (active high)',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '~Y~7',
        'desc' => 'output 7',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '~Y~6',
        'desc' => 'output 6',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '~Y~5',
        'desc' => 'output 5',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '~Y~4',
        'desc' => 'output 4',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '~Y~3',
        'desc' => 'output 3',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '~Y~2',
        'desc' => 'output 2',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '~Y~1',
        'desc' => 'output 1',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~Y~0',
        'desc' => 'output 0',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, An to ~Y~n',
        'val' => '18 (74HC)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~LE to ~Y~n',
        'val' => '17 (74HC)',
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~E~1 to ~Y~n',
        'val' => '15 (74HC)',
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Propagation delay, E2 to ~Y~n',
        'val' => '15 (74HC)',
        'unit' => 'ns',
      ),
    ),
  ),
  74138 => 
  array (
    'description' => '3-to-8 line decoder/demultiplexer; inverting',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc138.74hct138.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'A0',
        'desc' => 'data input 0',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'A1',
        'desc' => 'data input 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A2',
        'desc' => 'data input 2',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '~E~1',
        'desc' => 'enable input 1 (active low)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '~E~2',
        'desc' => 'enable input 2 (active low)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'E3',
        'desc' => 'enable input 3 (active high)',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '~Y~7',
        'desc' => 'output 7',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '~Y~6',
        'desc' => 'output 6',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '~Y~5',
        'desc' => 'output 5',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '~Y~4',
        'desc' => 'output 4',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '~Y~3',
        'desc' => 'output 3',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '~Y~2',
        'desc' => 'output 2',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '~Y~1',
        'desc' => 'output 1',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~Y~0',
        'desc' => 'output 0',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, An to ~Y~n',
        'val' => 
        array (
          0 => '12 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, E3 to ~Y~n',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~E~n to ~Y~n',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74139 => 
  array (
    'description' => 'Dual 2-to-4 line decoder/demultiplexer',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc139.74hct139.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1~E',
        'desc' => 'enable input (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1A__0',
        'desc' => 'address input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1A__1',
        'desc' => 'address input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1~Y~__0',
        'desc' => 'output (active low)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1~Y~__1',
        'desc' => 'output (active low)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1~Y~__2',
        'desc' => 'output (active low)',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '1~Y~__3',
        'desc' => 'output (active low)',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2~Y~__3',
        'desc' => 'output (active low)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2~Y~__2',
        'desc' => 'output (active low)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2~Y~__1',
        'desc' => 'output (active low)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2~Y~__0',
        'desc' => 'output (active low)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2A__1',
        'desc' => 'address input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '2A__0',
        'desc' => 'address input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '2~E',
        'desc' => 'enable input (active low)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA__n to n~Y~__n',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '13 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, n~E to n~Y~__n',
        'val' => 
        array (
          0 => '10 (74HC)',
          1 => '13 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  7414 => 
  array (
    'description' => 'Hex inverting Schmitt trigger',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/74HC_HCT14_3.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '4Y',
        'desc' => 'data output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '5Y',
        'desc' => 'data output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '5A',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '6Y',
        'desc' => 'data output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '6A',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA to nY',
        'val' => 
        array (
          0 => '12 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Positive-going threshold (Vcc = 4.5V)',
        'val' => 
        array (
          0 => '2.38 (74HC)',
          1 => '1.41 (74HCT)',
        ),
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Negative-going threshold (Vcc = 4.5V)',
        'val' => 
        array (
          0 => '1.4 (74HC)',
          1 => '0.85 (74HCT)',
        ),
        'unit' => 'V',
      ),
      3 => 
      array (
        'param' => 'Hysteresis',
        'val' => 
        array (
          0 => '0.98 (74HC)',
          1 => '0.56 (74HCT)',
        ),
        'unit' => 'V',
      ),
    ),
  ),
  74141 => 
  array (
    'description' => 'BCD-to-decimal decoder/Nixie tube driver',
    'aliases' => 
    array (
      0 => '7441',
      1 => 'K155ID1',
    ),
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://pdf1.alldatasheet.com/datasheet-pdf/view/115763/TI/SN74141/datasheet.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '8',
        'desc' => 'output 8',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '9',
        'desc' => 'output 9',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A',
        'desc' => 'BCD input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D',
        'desc' => 'BCD input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'B',
        'desc' => 'BCD input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'C',
        'desc' => 'BCD input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '2',
        'desc' => 'output 2',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3',
        'desc' => 'output 3',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '7',
        'desc' => 'output 7',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '6',
        'desc' => 'output 6',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4',
        'desc' => 'output 4',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '5',
        'desc' => 'output 5',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '1',
        'desc' => 'output 1',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => '0',
        'desc' => 'output 0',
      ),
    ),
    'notes' => 
    array (
      0 => 'For binary inputs 10 through 15, behavior is manufacturer-specific. 7441s may enable one or more output. 74141s and K155ID1s will turn all outputs off, but the connected tube may not blank.',
    ),
  ),
  74147 => 
  array (
    'description' => '10-to-4 line priority encoder',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc147.74hct147.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~A~__3',
        'desc' => 'decimal data input (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '~A~__4',
        'desc' => 'decimal data input (active low)',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '~A~__5',
        'desc' => 'decimal data input (active low)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '~A~__6',
        'desc' => 'decimal data input (active low)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '~A~__7',
        'desc' => 'decimal data input (active low)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '~Y~__2',
        'desc' => 'BCD address output (active low)',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '~Y~__1',
        'desc' => 'BCD address output (active low)',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '~Y~__0',
        'desc' => 'BCD address output (active low)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '~A~__8',
        'desc' => 'decimal data input (active low)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '~A~__0',
        'desc' => 'decimal data input (active low)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '~A~__1',
        'desc' => 'decimal data input (active low)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '~A~__2',
        'desc' => 'decimal data input (active low)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '~Y~__3',
        'desc' => 'BCD address output (active low)',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, ~A~__n to ~Y~__n',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'When two or more inputs are simultaneously active, the input with the highest priority is represented on the output.',
      1 => '~A~__8 has the highest priority.',
      2 => 'When all nine data inputs are high, all four outputs are high. (BCD zero)',
    ),
  ),
  74148 => 
  array (
    'description' => '8-to-3 line priority encoder',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.ti.com/lit/ds/scls109g/scls109g.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '4',
        'desc' => 'decimal data input (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '5',
        'desc' => 'decimal data input (active low)',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '6',
        'desc' => 'decimal data input (active low)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '7',
        'desc' => 'decimal data input (active low)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'EI',
        'desc' => 'enable input (active low)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'A2',
        'desc' => 'binary address output (active low)',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'A1',
        'desc' => 'BCD address output (active low)',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'A0',
        'desc' => 'binary address output (active low)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '0',
        'desc' => 'decimal data input (active low)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '1',
        'desc' => 'decimal data input (active low)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2',
        'desc' => 'decimal data input (active low)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '3',
        'desc' => 'decimal data input (active low)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'GS',
        'desc' => 'goes low when EI is low and any input is low',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'EO',
        'desc' => 'goes high when EI is low and any input is low (EO = ~GS~)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, n to An',
        'val' => 
        array (
          0 => '16 (74HC)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'When two or more inputs are simultaneously active, the input with the highest priority is represented on the output.',
      1 => 'Input 7 has the highest priority.',
      2 => 'When all eight data inputs are high, all three outputs are high.',
      3 => 'Multiple 74148s can be cascaded by connecting EO of the high priority chip to EI of the low priority chip (see datasheet).',
    ),
  ),
  74151 => 
  array (
    'description' => '8-input multiplexer',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc151.74hct151.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'I__3',
        'desc' => 'multiplexer input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'I__2',
        'desc' => 'multiplexer input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'I__1',
        'desc' => 'multiplexer input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'I__0',
        'desc' => 'multiplexer input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Y',
        'desc' => 'multiplexer output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '~Y',
        'desc' => 'complementary multiplexer output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '~E',
        'desc' => 'enable input (active low)',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'S__2',
        'desc' => 'select input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'S__1',
        'desc' => 'select input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'S__0',
        'desc' => 'select input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'I__7',
        'desc' => 'multiplexer input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'I__6',
        'desc' => 'multiplexer input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'I__5',
        'desc' => 'multiplexer input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'I__4',
        'desc' => 'multiplexer input',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, I__n to Y, ~Y',
        'val' => 
        array (
          0 => '17 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, S__n to Y, ~Y',
        'val' => 
        array (
          0 => '19 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~E to Y',
        'val' => 
        array (
          0 => '12 (74HC)',
          1 => '13 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Propagation delay, ~E to ~Y',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '18 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74153 => 
  array (
    'description' => 'Dual 4-input multiplexer',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc153.74hct153.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1~E',
        'desc' => 'enable input 1',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'S__1',
        'desc' => 'common data select input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1I__3',
        'desc' => 'data input from source 1',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1I__2',
        'desc' => 'data input from source 1',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1I__1',
        'desc' => 'data input from source 1',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1I__0',
        'desc' => 'data input from source 1',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '1Y',
        'desc' => 'multiplexer output from source 1',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2Y',
        'desc' => 'multiplexer output from source 2',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2I__0',
        'desc' => 'data input from source 2',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2I__1',
        'desc' => 'data input from source 2',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2I__2',
        'desc' => 'data input from source 2',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2I__3',
        'desc' => 'data input from source 2',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'S__0',
        'desc' => 'common data select input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '2~E',
        'desc' => 'enable input 2',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, 1I__n, 2I__n to nY',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '16 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, S__n to nY',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, n~E to nY',
        'val' => 
        array (
          0 => '10 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74154 => 
  array (
    'description' => '4-to-16 line decoder/demultiplexer',
    'package' => 'DIP',
    'pincount' => 24,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc154.74hct154.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~Y~0',
        'desc' => 'data output (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '~Y~1',
        'desc' => 'data output (active low)',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '~Y~2',
        'desc' => 'data output (active low)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '~Y~3',
        'desc' => 'data output (active low)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '~Y~4',
        'desc' => 'data output (active low)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '~Y~5',
        'desc' => 'data output (active low)',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '~Y~6',
        'desc' => 'data output (active low)',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '~Y~7',
        'desc' => 'data output (active low)',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '~Y~8',
        'desc' => 'data output (active low)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '~Y~9',
        'desc' => 'data output (active low)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '~Y~10',
        'desc' => 'data output (active low)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '~Y~11',
        'desc' => 'data output (active low)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '~Y~12',
        'desc' => 'data output (active low)',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~Y~13',
        'desc' => 'data output (active low)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => '~Y~14',
        'desc' => 'data output (active low)',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => '~Y~15',
        'desc' => 'data output (active low)',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => '~E~0',
        'desc' => 'enable input (active low)',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => '~E~1',
        'desc' => 'enable input (active low)',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'A3',
        'desc' => 'address input',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'A2',
        'desc' => 'address input',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'A1',
        'desc' => 'address input',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'A0',
        'desc' => 'address input',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, An to ~Y~n',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '13 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~E~n to ~Y~n',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '13 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74157 => 
  array (
    'description' => 'Quad 2-input multiplexer',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc157.74hct157.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'S',
        'desc' => 'common data select input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1I__0',
        'desc' => 'data input from source 0',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1I__1',
        'desc' => 'data input from source 1',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1Y',
        'desc' => 'multiplexer output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2I__0',
        'desc' => 'data input from source 0',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2I__1',
        'desc' => 'data input from source 1',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2Y',
        'desc' => 'multiplexer output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3Y',
        'desc' => 'multiplexer output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3I__1',
        'desc' => 'data input from source 1',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '3I__0',
        'desc' => 'data input from source 0',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4Y',
        'desc' => 'multiplexer output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4I__1',
        'desc' => 'data input from source 1',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '4I__0',
        'desc' => 'data input from source 0',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~E',
        'desc' => 'enable input (active low)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nI__0, nI__1 to nY',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '13 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~E to nY',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '12 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, S to nY',
        'val' => 
        array (
          0 => '12 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74158 => 
  array (
    'description' => 'Quad 2-input multiplexer; inverting',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc158.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'S',
        'desc' => 'common data select input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1I__0',
        'desc' => 'data input from source 0',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1I__1',
        'desc' => 'data input from source 1',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1~Y',
        'desc' => 'multiplexer output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2I__0',
        'desc' => 'data input from source 0',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2I__1',
        'desc' => 'data input from source 1',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2~Y',
        'desc' => 'multiplexer output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3~Y',
        'desc' => 'multiplexer output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3I__1',
        'desc' => 'data input from source 1',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '3I__0',
        'desc' => 'data input from source 0',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4~Y',
        'desc' => 'multiplexer output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4I__1',
        'desc' => 'data input from source 1',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '4I__0',
        'desc' => 'data input from source 0',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~E',
        'desc' => 'enable input (active low)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nI__0, nI__1 to n~Y',
        'val' => '12 (74HC)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~E to n~Y',
        'val' => '14 (74HC)',
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, S to n~Y',
        'val' => '14 (74HC)',
        'unit' => 'ns',
      ),
    ),
  ),
  74160 => 
  array (
    'description' => 'Presettable synchronous BCD decade counter; asynchronous reset',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc160.74hct160.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~MR',
        'desc' => 'asynchronous master reset (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'CP',
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'D__0',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D__1',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'D__2',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'D__3',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'CEP',
        'desc' => 'count enable input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '~PE',
        'desc' => 'parallel load enable input (active low)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'CET',
        'desc' => 'count enable carry output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'Q__3',
        'desc' => 'counter output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q__2',
        'desc' => 'counter output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Q__1',
        'desc' => 'counter output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Q__0',
        'desc' => 'counter output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'TC',
        'desc' => 'terminal count output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Q__n',
        'val' => 
        array (
          0 => '19 (74HC)',
          1 => '21 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, CP to TC',
        'val' => 
        array (
          0 => '21 (74HC)',
          1 => '24 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~MR to Q__n',
        'val' => 
        array (
          0 => '21 (74HC)',
          1 => '23 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Propagation delay, ~MR to TC',
        'val' => 
        array (
          0 => '21 (74HC)',
          1 => '26 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      4 => 
      array (
        'param' => 'Propagation delay, CET to TC',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '14 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      5 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '61 (74HC)',
          1 => '31 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
  ),
  74161 => 
  array (
    'description' => 'Presettable synchronous 4-bit binary counter; asynchronous reset',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc161.74hct161.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~MR',
        'desc' => 'asynchronous master reset (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'CP',
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'D__0',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D__1',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'D__2',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'D__3',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'CEP',
        'desc' => 'count enable input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '~PE',
        'desc' => 'parallel load enable input (active low)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'CET',
        'desc' => 'count enable carry output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'Q__3',
        'desc' => 'counter output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q__2',
        'desc' => 'counter output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Q__1',
        'desc' => 'counter output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Q__0',
        'desc' => 'counter output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'TC',
        'desc' => 'terminal count output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Q__n',
        'val' => 
        array (
          0 => '19 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, CP to TC',
        'val' => 
        array (
          0 => '21 (74HC)',
          1 => '24 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~MR to Q__n',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '25 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Propagation delay, ~MR to TC',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '26 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      4 => 
      array (
        'param' => 'Propagation delay, CET to TC',
        'val' => 
        array (
          0 => '10 (74HC)',
          1 => '14 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      5 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '44 (74HC)',
          1 => '45 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
  ),
  74163 => 
  array (
    'description' => 'Presettable synchronous 4-bit binary counter; synchronous reset',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc163.74hct163.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~MR',
        'desc' => 'synchronous master reset (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'CP',
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'D__0',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D__1',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'D__2',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'D__3',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'CEP',
        'desc' => 'count enable input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '~PE',
        'desc' => 'parallel load enable input (active low)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'CET',
        'desc' => 'count enable carry output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'Q__3',
        'desc' => 'counter output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q__2',
        'desc' => 'counter output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Q__1',
        'desc' => 'counter output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Q__0',
        'desc' => 'counter output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'TC',
        'desc' => 'terminal count output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Q__n',
        'val' => 
        array (
          0 => '17 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, CP to TC',
        'val' => 
        array (
          0 => '21 (74HC)',
          1 => '25 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, CET to TC',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '14 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '51 (74HC)',
          1 => '50 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
  ),
  74164 => 
  array (
    'description' => '8-bit serial-in/parallel-out shift register',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc164.74hct164.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'DSA',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'DSB',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Q0',
        'desc' => 'output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Q1',
        'desc' => 'output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Q2',
        'desc' => 'output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q3',
        'desc' => 'output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'CP',
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '~MR',
        'desc' => 'master reset input (active low)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'Q4',
        'desc' => 'output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'Q5',
        'desc' => 'output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q6',
        'desc' => 'output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Q7',
        'desc' => 'output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Qn',
        'val' => 
        array (
          0 => '12 (74HC)',
          1 => '14 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~MR to Qn',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '16 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '78 (74HC)',
          1 => '61 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'Either DSA or DSB can be used as an active high enable for data entry through the other input.',
      1 => 'Otherwise, Both inputs must be connected together or an unused input must be tied high.',
    ),
  ),
  74165 => 
  array (
    'description' => '8-bit parallel-in/serial-out shift register',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc165.74hct165.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~PL',
        'desc' => 'asynchronous parallel load input (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'CP',
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'D4',
        'desc' => 'parallel data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D5',
        'desc' => 'parallel data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'D6',
        'desc' => 'parallel data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'D7',
        'desc' => 'parallel data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '~Q~7',
        'desc' => 'complementary output from the last stage',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Q7',
        'desc' => 'serial output from the last stage',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'DS',
        'desc' => 'serial data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'D0',
        'desc' => 'parallel data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'D1',
        'desc' => 'parallel data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'D2',
        'desc' => 'parallel data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'D3',
        'desc' => 'parallel data input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~CE',
        'desc' => 'clock enable input (active low)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP, ~CE to Q7, ~Q~7',
        'val' => 
        array (
          0 => '16 (74HC)',
          1 => '14 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~PL to Q7, ~Q~7',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, D7 to Q7, ~Q~7',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '56 (74HC)',
          1 => '48 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'The low-to-high transition of input ~CE should only take place while CP is high for predictable operation.',
      1 => 'Either CP or ~CE should be high before the low-to-high transition of ~PL to prevent shifting the data when ~PL is activated.',
    ),
  ),
  74166 => 
  array (
    'description' => '8-bit parallel-in/serial-out shift register',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc166.74hct166.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'D__s',
        'desc' => 'serial data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'D__0',
        'desc' => 'parallel data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'D__1',
        'desc' => 'parallel data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D__2',
        'desc' => 'parallel data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'D__3',
        'desc' => 'parallel data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '~CE',
        'desc' => 'clock enable input (active low)',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'CP',
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '~MR',
        'desc' => 'asynchronous master reset (active low)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'D__4',
        'desc' => 'parallel data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'D__5',
        'desc' => 'parallel data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'D__6',
        'desc' => 'parallel data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Q__7',
        'desc' => 'serial output from the last stage',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'D__7',
        'desc' => 'parallel data input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~PE',
        'desc' => 'parallel enable input (active low)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Q__7',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~MR to Q__7',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '63 (74HC)',
          1 => '50 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'The low-to-high transition of ~CE should only take place while CP is high for predictable operation.',
      1 => 'A low on ~MR overrides all other inputs and clears the register asynchronously, forcing all bit positions to a low stage.',
    ),
  ),
  74173 => 
  array (
    'description' => 'Quad D-type flip-flop; positive-edge trigger; 3-state',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc173.74hct173.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~OE~__1',
        'desc' => 'output enable input (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '~OE~__2',
        'desc' => 'output enable input (active low)',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Q__0',
        'desc' => '3-state flip-flop output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Q__1',
        'desc' => '3-state flip-flop output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Q__2',
        'desc' => '3-state flip-flop output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q__3',
        'desc' => '3-state flip-flop output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'CP',
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '~E~__1',
        'desc' => 'data enable input (active low)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '~E~__2',
        'desc' => 'data enable input (active low)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'D__3',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'D__2',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'D__1',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'D__0',
        'desc' => 'data input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'MR',
        'desc' => 'asynchronous master reset (active high)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Q__n',
        'val' => 
        array (
          0 => '17 (74HC/HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, MR to Q__n',
        'val' => 
        array (
          0 => '13 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => '88 (74HC/HCT)',
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'When one or both ~OE~__n inputs are high, the outputs are forced to a high-impedance off state.',
    ),
  ),
  74174 => 
  array (
    'description' => 'Hex D-type flip-flop with reset; positive-edge trigger',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc174.74hct174.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~MR',
        'desc' => 'asynchronous master reset (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Q__0',
        'desc' => 'flip-flop output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'D__0',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D__1',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Q__1',
        'desc' => 'flip-flop output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'D__2',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Q__2',
        'desc' => 'flip-flop output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'CP',
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'Q__3',
        'desc' => 'flip-flop output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'D__3',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q__4',
        'desc' => 'flip-flop output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'D__4',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'D__5',
        'desc' => 'data input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Q__5',
        'desc' => 'flip-flop output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Q__n',
        'val' => 
        array (
          0 => '17 (74HC)',
          1 => '18 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~MR to Q__n',
        'val' => 
        array (
          0 => '13 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '99 (74HC)',
          1 => '69 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
  ),
  74175 => 
  array (
    'description' => 'Quad D-type flip-flop with reset; positive-edge trigger',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc175.74hct175.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~MR',
        'desc' => 'asynchronous master reset (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Q__0',
        'desc' => 'flip-flop output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '~Q~__0',
        'desc' => 'complementary flip-flop output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D__0',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'D__1',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '~Q~__1',
        'desc' => 'complementary flip-flop output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Q__1',
        'desc' => 'flip-flop output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'CP',
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'Q__2',
        'desc' => 'flip-flop output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '~Q~__2',
        'desc' => 'complementary flip-flop output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'D__2',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'D__3',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '~Q~__3',
        'desc' => 'complementary flip-flop output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Q__3',
        'desc' => 'flip-flop output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Q__n, ~Q~__n',
        'val' => 
        array (
          0 => '17 (74HC)',
          1 => '16 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~MR to Q__n',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '83 (74HC)',
          1 => '54 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
  ),
  74191 => 
  array (
    'description' => 'Presettable synchronous 4-bit binary up/down counter',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc191.74hct191.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'D__1',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Q__1',
        'desc' => 'counter output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Q__0',
        'desc' => 'counter output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '~CE',
        'desc' => 'count enable input (active low)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '~U~/D',
        'desc' => 'up/down input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q__2',
        'desc' => 'counter output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Q__3',
        'desc' => 'counter output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'D__3',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'D__2',
        'desc' => 'data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '~PL',
        'desc' => 'parallel load input (active low)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'TC',
        'desc' => 'terminal count output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '~RC',
        'desc' => 'ripple clock output (active low)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'CP',
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'D__0',
        'desc' => 'data input',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Q__n',
        'val' => '22 (74HC/74HCT)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => '36 (74HC/74HCT)',
        'unit' => 'MHz',
      ),
    ),
  ),
  74193 => 
  array (
    'description' => 'Presettable synchronous 4-bit binary up/down counter; separate up/down clocks',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc193.74hct193.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'D__1',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Q__1',
        'desc' => 'counter output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Q__0',
        'desc' => 'counter output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'CPD',
        'desc' => 'count down clock input (low-to-high, edge-triggered)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'CPU',
        'desc' => 'count up clock input (low-to-high, edge-triggered)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q__2',
        'desc' => 'counter output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Q__3',
        'desc' => 'counter output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'D__3',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'D__2',
        'desc' => 'data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '~PL',
        'desc' => 'parallel load input (active low)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '~TCU',
        'desc' => 'terminal count up (carry) output (active low)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '~TCD',
        'desc' => 'terminal count down (borrow) output (active low)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'MR',
        'desc' => 'asynchronous master reset (active high)',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'D__0',
        'desc' => 'data input',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CPU, CPD to Q__n',
        'val' => 
        array (
          0 => '23 (74HC)',
          1 => '23 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, CPU to ~TCU, ~TCD',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~PL to Q__n',
        'val' => 
        array (
          0 => '25 (74HC)',
          1 => '26 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Propagation delay, MR to Q__n',
        'val' => 
        array (
          0 => '21 (74HC)',
          1 => '22 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      4 => 
      array (
        'param' => 'Propagation delay, D__n to Q__n',
        'val' => 
        array (
          0 => '25 (74HC)',
          1 => '27 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      5 => 
      array (
        'param' => 'Propagation delay, ~PL to ~TCU, ~TCD',
        'val' => 
        array (
          0 => '29 (74HC)',
          1 => '31 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      6 => 
      array (
        'param' => 'Propagation delay, MR to ~TCU, ~TCD',
        'val' => 
        array (
          0 => '27 (74HC)',
          1 => '29 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      7 => 
      array (
        'param' => 'Propagation delay, CPU, D__n to ~TCU, ~TCD',
        'val' => 
        array (
          0 => '29 (74HC)',
          1 => '32 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      8 => 
      array (
        'param' => 'Maximum frequency',
        'val' => 
        array (
          0 => '41 (74HC)',
          1 => '43 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
  ),
  74194 => 
  array (
    'description' => '4-bit bidirectional universal shift register',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc194.74hct194.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~MR',
        'desc' => 'asynchronous master reset (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'D__SR',
        'desc' => 'serial data input (shift right)',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'D__0',
        'desc' => 'parallel data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D__1',
        'desc' => 'parallel data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'D__2',
        'desc' => 'parallel data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'D__3',
        'desc' => 'parallel data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'D__SL',
        'desc' => 'serial data input (shift left)',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'S__0',
        'desc' => 'mode control input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'S__1',
        'desc' => 'mode control input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'CP',
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q__3',
        'desc' => 'parallel output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Q__2',
        'desc' => 'parallel output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Q__1',
        'desc' => 'parallel output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Q__0',
        'desc' => 'parallel output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Q__n',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~MR to Q__n',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '102 (74HC)',
          1 => '77 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'S__0 and S__1 are low; hold (do nothing)',
      1 => 'S__0 low and S__1 high; shift left',
      2 => 'S__0 high and S__1 low; shift right',
      3 => 'S__0 and S__1 high; parallel load',
    ),
  ),
  74195 => 
  array (
    'description' => 'Universal 4-Bit Shift Register',
    'aliases' => 
    array (
    ),
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://pdf1.alldatasheet.com/datasheet-pdf/view/131233/NSC/74195.html',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~MR~',
        'desc' => 'Asynchronous Master Reset (Active Low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'J',
        'desc' => 'First Stage J Input (Active High)',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '~K~',
        'desc' => 'First Stage K Input (Active Low)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'P__0',
        'desc' => 'Parallel Data Input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'P__1',
        'desc' => 'Parallel Data Input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'P__2',
        'desc' => 'Parallel Data Input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'P__3',
        'desc' => 'Parallel Data Input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'Ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '~PE~',
        'desc' => 'Parallel Enable Input (Active Low)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'CP',
        'desc' => 'Clock Pulse Input (Active Rising Edge)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '~Q~__3',
        'desc' => 'Complementary Last Stage Output (Active Low)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q__3',
        'desc' => 'Parallel Outputs',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Q__2',
        'desc' => 'Parallel Outputs',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Q__1',
        'desc' => 'Parallel Outputs',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Q__0',
        'desc' => 'Parallel Outputs',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'VCC',
        'desc' => 'Power',
      ),
    ),
  ),
  7420 => 
  array (
    'description' => 'Dual 4-input NAND gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc20.74hct20.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1C',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1D',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2C',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2D',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA, nB, nC, nD to nY',
        'val' => 
        array (
          0 => '8 (74HC)',
          1 => '13 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  7421 => 
  array (
    'description' => 'Dual 4-input AND gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/74HC21_3.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1C',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1D',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2C',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2D',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA, nB, nC, nD to nY',
        'val' => '10 (74HC)',
        'unit' => 'ns',
      ),
    ),
  ),
  74221 => 
  array (
    'description' => 'Dual non-retriggerable monostable multivibrator with reset',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc221.74hct221.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1~A',
        'desc' => 'negative-edge triggered input 1',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1B',
        'desc' => 'positive-edge triggered input 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1~R~D',
        'desc' => 'direct reset (low) and positive-edge triggered input 1',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1~Q',
        'desc' => 'active low output 1',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2Q',
        'desc' => 'active high output 2',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2CEXT',
        'desc' => 'external capacitor connection 2',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2REXT/CEXT',
        'desc' => 'external resistor and capacitor connection 2',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2~A',
        'desc' => 'negative-edge triggered input 2',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2B',
        'desc' => 'positive-edge triggered input 2',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2~R~D',
        'desc' => 'direct reset (low) and positive-edge triggered input 2',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2~Q',
        'desc' => 'active low output 2',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '1Q',
        'desc' => 'active high output 1',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '1CEXT',
        'desc' => 'external capacitor connection 1',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '1REXT/CEXT',
        'desc' => 'external resistor and capacitor connection 1',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, n~R~D, n~A, nB to nQ or n~Q',
        'val' => 
        array (
          0 => '29 (74HC)',
          1 => '32 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Output transition time',
        'val' => 
        array (
          0 => '19 (74HC)',
          1 => '7 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'External timing resistor',
        'val' => 
        array (
          0 => '2 (min)',
          1 => '1000 (max)',
        ),
        'unit' => 'kΩ',
      ),
    ),
  ),
  74237 => 
  array (
    'description' => '3-to-8 line decoder/demultiplexer with address latches; non-inverting',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc237.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'A0',
        'desc' => 'data input 0',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'A1',
        'desc' => 'data input 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A2',
        'desc' => 'data input 2',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '~LE',
        'desc' => 'latch enable input (active low)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '~E~1',
        'desc' => 'data enable input 1 (active low)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'E2',
        'desc' => 'data enable input 2 (active high)',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Y7',
        'desc' => 'output 7',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Y6',
        'desc' => 'output 6',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'Y5',
        'desc' => 'output 5',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'Y4',
        'desc' => 'output 4',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Y3',
        'desc' => 'output 3',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Y2',
        'desc' => 'output 2',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Y1',
        'desc' => 'output 1',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Y0',
        'desc' => 'output 0',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, An to Yn',
        'val' => '16 (74HC)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~LE to Yn',
        'val' => '19 (74HC)',
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~E~1 to Yn',
        'val' => '14 (74HC)',
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Propagation delay, E2 to Yn',
        'val' => '14 (74HC)',
        'unit' => 'ns',
      ),
    ),
  ),
  74238 => 
  array (
    'description' => '3-to-8 line decoder/demultiplexer; non-inverting',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc238.74hct238.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'A0',
        'desc' => 'data input 0',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'A1',
        'desc' => 'data input 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A2',
        'desc' => 'data input 2',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '~E~1',
        'desc' => 'enable input 1 (active low)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '~E~2',
        'desc' => 'enable input 2 (active low)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'E3',
        'desc' => 'enable input 3 (active high)',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Y7',
        'desc' => 'output 7',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Y6',
        'desc' => 'output 6',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'Y5',
        'desc' => 'output 5',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'Y4',
        'desc' => 'output 4',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Y3',
        'desc' => 'output 3',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Y2',
        'desc' => 'output 2',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Y1',
        'desc' => 'output 1',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Y0',
        'desc' => 'output 0',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, An to Yn',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '18 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, E3 to Yn',
        'val' => 
        array (
          0 => '16 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~E~n to Yn',
        'val' => 
        array (
          0 => '17 (74HC)',
          1 => '21 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74240 => 
  array (
    'description' => 'Octal buffer/line driver; 3-state; inverting',
    'package' => 'DIP',
    'pincount' => 20,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc240.74hct240.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1~OE',
        'desc' => 'output enable (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1A0',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '2Y0',
        'desc' => 'bus output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1A1',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2Y1',
        'desc' => 'bus output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1A2',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2Y2',
        'desc' => 'bus output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '1A3',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2Y3',
        'desc' => 'bus output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2A3',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '1Y3',
        'desc' => 'bus output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2A2',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '1Y2',
        'desc' => 'bus output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '2A1',
        'desc' => 'data input',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => '1Y1',
        'desc' => 'bus output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => '2A0',
        'desc' => 'data input',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => '1Y0',
        'desc' => 'bus output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => '2~OE',
        'desc' => 'output enable (active low)',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nAn to nYn',
        'val' => 
        array (
          0 => '9 (74HC/HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'Setting 1~OE or 2~OE high causes the outputs to assume a high-impedance off state.',
    ),
  ),
  74241 => 
  array (
    'description' => 'Octal buffer/line driver; 3-state; non-inverting',
    'package' => 'DIP',
    'pincount' => 20,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc241.74hct241.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1~OE',
        'desc' => 'output enable (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1A0',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '2Y0',
        'desc' => 'bus output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1A1',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2Y1',
        'desc' => 'bus output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1A2',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2Y2',
        'desc' => 'bus output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '1A3',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2Y3',
        'desc' => 'bus output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2A3',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '1Y3',
        'desc' => 'bus output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2A2',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '1Y2',
        'desc' => 'bus output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '2A1',
        'desc' => 'data input',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => '1Y1',
        'desc' => 'bus output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => '2A0',
        'desc' => 'data input',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => '1Y0',
        'desc' => 'bus output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => '2OE',
        'desc' => 'output enable (active high)',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nAn to nYn',
        'val' => 
        array (
          0 => '7 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'Setting 1~OE high or 2OE low causes the outputs to assume a high-impedance off state.',
    ),
  ),
  74243 => 
  array (
    'description' => 'Quad bus transceiver; 3-state',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc243.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~OE~A',
        'desc' => 'output enable (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A0',
        'desc' => 'data input or output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'A1',
        'desc' => 'data input or output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'A2',
        'desc' => 'data input or output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'A3',
        'desc' => 'data input or output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'B3',
        'desc' => 'data output or input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'B2',
        'desc' => 'data output or input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'B1',
        'desc' => 'data output or input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'B0',
        'desc' => 'data output or input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'OEB',
        'desc' => 'output enable (active high)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, An to Bn; Bn to An',
        'val' => '6 (74HC)',
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'When ~OE~A and OEB are low, An are inputs.',
      1 => 'When ~OE~A and OEB are high, Bn are inputs.',
      2 => 'Otherwise, An and Bn are in a high-impedance off state.',
    ),
  ),
  74244 => 
  array (
    'description' => 'Octal buffer/line driver; 3-state; non-inverting',
    'package' => 'DIP',
    'pincount' => 20,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc244.74hct244.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1~OE',
        'desc' => 'output enable (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1A0',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '2Y0',
        'desc' => 'bus output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1A1',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2Y1',
        'desc' => 'bus output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1A2',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2Y2',
        'desc' => 'bus output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '1A3',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2Y3',
        'desc' => 'bus output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2A3',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '1Y3',
        'desc' => 'bus output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2A2',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '1Y2',
        'desc' => 'bus output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '2A1',
        'desc' => 'data input',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => '1Y1',
        'desc' => 'bus output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => '2A0',
        'desc' => 'data input',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => '1Y0',
        'desc' => 'bus output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => '2~OE',
        'desc' => 'output enable (active low)',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nAn to nYn',
        'val' => 
        array (
          0 => '9 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'Setting 1~OE or 2~OE high causes the outputs to assume a high-impedance off state.',
    ),
  ),
  74245 => 
  array (
    'description' => 'Octal bus transceiver; 3-state',
    'package' => 'DIP',
    'pincount' => 20,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc245.74hct245.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'DIR',
        'desc' => 'direction control',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'A0',
        'desc' => 'data input/output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A1',
        'desc' => 'data input/output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'A2',
        'desc' => 'data input/output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'A3',
        'desc' => 'data input/output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'A4',
        'desc' => 'data input/output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'A5',
        'desc' => 'data input/output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'A6',
        'desc' => 'data input/output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'A7',
        'desc' => 'data input/output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'B7',
        'desc' => 'data input/output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'B6',
        'desc' => 'data input/output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'B5',
        'desc' => 'data input/output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'B4',
        'desc' => 'data input/output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'B3',
        'desc' => 'data input/output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'B2',
        'desc' => 'data input/output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'B1',
        'desc' => 'data input/output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'B0',
        'desc' => 'data input/output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => '~OE',
        'desc' => 'output enable (active low)',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, An to Bn or Bn to An',
        'val' => 
        array (
          0 => '7 (74HC)',
          1 => '10 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'When DIR is high, An are inputs.',
      1 => 'When DIR is low, Bn are inputs.',
      2 => 'When ~OE is high, An and Bn are in a high-impedance off state.',
    ),
  ),
  74251 => 
  array (
    'description' => '8-input multiplexer; 3-state',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc251.74hct251.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'I__3',
        'desc' => 'multiplexer input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'I__2',
        'desc' => 'multiplexer input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'I__1',
        'desc' => 'multiplexer input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'I__0',
        'desc' => 'multiplexer input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Y',
        'desc' => 'multiplexer output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '~Y',
        'desc' => 'complementary multiplexer output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '~OE',
        'desc' => 'enable input (active low; outputs in high-impedance off state when high)',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'S__2',
        'desc' => 'select input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'S__1',
        'desc' => 'select input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'S__0',
        'desc' => 'select input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'I__7',
        'desc' => 'multiplexer input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'I__6',
        'desc' => 'multiplexer input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'I__5',
        'desc' => 'multiplexer input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'I__4',
        'desc' => 'multiplexer input',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, I__n to Y',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, I__n to ~Y',
        'val' => 
        array (
          0 => '17 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, S__n to Y',
        'val' => '20 (74HC/HCT)',
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Propagation delay, S__n to ~Y',
        'val' => 
        array (
          0 => '21 (74HC)',
          1 => '21 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74253 => 
  array (
    'description' => 'Dual 4-input multiplexer; 3-state',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc253.74hct253.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1~OE',
        'desc' => 'enable input 1 (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'S__1',
        'desc' => 'common data select input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1I__3',
        'desc' => 'data input from source 1',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1I__2',
        'desc' => 'data input from source 1',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1I__1',
        'desc' => 'data input from source 1',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1I__0',
        'desc' => 'data input from source 1',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '1Y',
        'desc' => 'multiplexer output from source 1',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2Y',
        'desc' => 'multiplexer output from source 2',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2I__0',
        'desc' => 'data input from source 2',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2I__1',
        'desc' => 'data input from source 2',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2I__2',
        'desc' => 'data input from source 2',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2I__3',
        'desc' => 'data input from source 2',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'S__0',
        'desc' => 'common data select input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '2~OE',
        'desc' => 'enable input 2 (active low)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, 1I__n, 2I__n to nY',
        'val' => 
        array (
          0 => '17 (74HC/HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, S__n to nY',
        'val' => 
        array (
          0 => '18 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'When 1~OE or 2~OE is high, the outputs are forced to a high-impedance off state.',
    ),
  ),
  74257 => 
  array (
    'description' => 'Quad 2-input multiplexer; 3-state',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc257.74hct257.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'S',
        'desc' => 'common data select input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1I__0',
        'desc' => 'data input from source 0',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1I__1',
        'desc' => 'data input from source 1',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1Y',
        'desc' => 'multiplexer output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2I__0',
        'desc' => 'data input from source 0',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2I__1',
        'desc' => 'data input from source 1',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2Y',
        'desc' => 'multiplexer output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3Y',
        'desc' => 'multiplexer output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3I__1',
        'desc' => 'data input from source 1',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '3I__0',
        'desc' => 'data input from source 0',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4Y',
        'desc' => 'multiplexer output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4I__1',
        'desc' => 'data input from source 1',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '4I__0',
        'desc' => 'data input from source 0',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~OE',
        'desc' => 'enable input (active low; outputs in high-impedance off state when high)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nI__0, nI__1 to nY',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '13 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, S to nY',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74258 => 
  array (
    'description' => 'Quad 2-input multiplexer; 3-state; inverting',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc258.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'S',
        'desc' => 'common data select input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1I__0',
        'desc' => 'data input from source 0',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1I__1',
        'desc' => 'data input from source 1',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1~Y',
        'desc' => 'multiplexer output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2I__0',
        'desc' => 'data input from source 0',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2I__1',
        'desc' => 'data input from source 1',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2~Y',
        'desc' => 'multiplexer output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3~Y',
        'desc' => 'multiplexer output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3I__1',
        'desc' => 'data input from source 1',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '3I__0',
        'desc' => 'data input from source 0',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4~Y',
        'desc' => 'multiplexer output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4I__1',
        'desc' => 'data input from source 1',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '4I__0',
        'desc' => 'data input from source 0',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~OE',
        'desc' => 'enable input (active low; outputs in high-impedance off state when high)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nI__0, nI__1 to n~Y',
        'val' => '9 (74HC)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, S to n~Y',
        'val' => '14 (74HC)',
        'unit' => 'ns',
      ),
    ),
  ),
  74259 => 
  array (
    'description' => '8-bit addressable latch',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc259.74hct259.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'A0',
        'desc' => 'address input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'A1',
        'desc' => 'address input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A2',
        'desc' => 'address input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Q0',
        'desc' => 'latch output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Q1',
        'desc' => 'latch output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q2',
        'desc' => 'latch output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Q3',
        'desc' => 'latch output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Q4',
        'desc' => 'latch output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'Q5',
        'desc' => 'latch output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'Q6',
        'desc' => 'latch output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q7',
        'desc' => 'latch output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'D',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '~LE',
        'desc' => 'latch enable input (active low)',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~MR',
        'desc' => 'conditional reset input (active low)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, D to Qn',
        'val' => 
        array (
          0 => '18 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, An to Qn',
        'val' => 
        array (
          0 => '17 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~LE to Qn',
        'val' => 
        array (
          0 => '17 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  7427 => 
  array (
    'description' => 'Triple 3-input NOR gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/74HC_HCT27_3.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2C',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3B',
        'desc' => 'data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '3C',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '1C',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA, nB, nC to nY',
        'val' => 
        array (
          0 => '8 (74HC)',
          1 => '10 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74273 => 
  array (
    'description' => 'Octal D-type flip-flop with reset; positive-edge trigger',
    'package' => 'DIP',
    'pincount' => 20,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc273.74hct273.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~MR',
        'desc' => 'master reset input (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Q0',
        'desc' => 'flip-flop output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'D0',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D1',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Q1',
        'desc' => 'flip-flop output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q2',
        'desc' => 'flip-flop output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'D2',
        'desc' => 'data input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'D3',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Q3',
        'desc' => 'flip-flop output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'CP',
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q4',
        'desc' => 'flip-flop output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'D4',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'D5',
        'desc' => 'data input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Q5',
        'desc' => 'flip-flop output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Q6',
        'desc' => 'flip-flop output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'D6',
        'desc' => 'data input',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'D7',
        'desc' => 'data input',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'Q7',
        'desc' => 'flip-flop output',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Qn',
        'val' => '15 (74HC/HCT)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '66 (74HC)',
          1 => '36 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
  ),
  74280 => 
  array (
    'description' => '9-bit odd/even parity generator/checker',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc280.74hct280.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'I__6',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'I__7',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'I__8',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Σ__E',
        'desc' => 'even parity output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Σ__O',
        'desc' => 'odd parity output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'I__0',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'I__1',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'I__2',
        'desc' => 'data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'I__3',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'I__4',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'I__5',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, I__n to Σ__E',
        'val' => 
        array (
          0 => '17 (74HC)',
          1 => '18 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, I__n to Σ__O',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '22 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74283 => 
  array (
    'description' => '4-bit binary full adder with fast carry',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc283.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'S2',
        'desc' => 'sum output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'B2',
        'desc' => 'B operand input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A2',
        'desc' => 'A operand input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'S1',
        'desc' => 'sum output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'A1',
        'desc' => 'A operand input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'B1',
        'desc' => 'B operand input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'CIN',
        'desc' => 'carry input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'COUT',
        'desc' => 'carry output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'S4',
        'desc' => 'sum output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'B4',
        'desc' => 'B operand input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'A4',
        'desc' => 'A operand input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'S3',
        'desc' => 'sum output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'A3',
        'desc' => 'A operand input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'B3',
        'desc' => 'B operand input',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CIN to S1',
        'val' => 
        array (
          0 => '16 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, CIN to S2',
        'val' => 
        array (
          0 => '18 (74HC)',
          1 => '21 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, CIN to S3',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '23 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Propagation delay, CIN to S4',
        'val' => 
        array (
          0 => '23 (74HC)',
          1 => '27 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      4 => 
      array (
        'param' => 'Propagation delay, An, Bn to Sn',
        'val' => 
        array (
          0 => '21 (74HC)',
          1 => '25 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      5 => 
      array (
        'param' => 'Propagation delay, CIN to COUT',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '23 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      6 => 
      array (
        'param' => 'Propagation delay, An, Bn to COUT',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '24 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74299 => 
  array (
    'description' => '8-bit universal shift register; 3-state',
    'package' => 'DIP',
    'pincount' => 20,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc299.74hct299.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'S0',
        'desc' => 'mode select input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '~OE~1',
        'desc' => 'output enable (active low)',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '~OE~2',
        'desc' => 'output enable (active low)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'I/O6',
        'desc' => 'parallel data input/output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'I/O4',
        'desc' => 'parallel data input/output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'I/O2',
        'desc' => 'parallel data input/output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'I/O0',
        'desc' => 'parallel data input/output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'Q0',
        'desc' => 'serial output (standard output)',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '~MR',
        'desc' => 'asynchronous master reset (active low)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'DSR',
        'desc' => 'serial data shift-right input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'CP',
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'I/O1',
        'desc' => 'parallel data input/output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'I/O3',
        'desc' => 'parallel data input/output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'I/O5',
        'desc' => 'parallel data input/output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'I/O7',
        'desc' => 'parallel data input/output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'Q7',
        'desc' => 'serial output (standard output)',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'DSL',
        'desc' => 'serial data shift-left input',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'S1',
        'desc' => 'mode select input',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Q0, Q7',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, CP to I/On',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~MR to Q0, Q7, I/On',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '23 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '50 (74HC)',
          1 => '46 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'S1 and S0 are low; hold (do nothing)',
      1 => 'S1 is high and S0 is low; shift left (DSL → Q7, Q7 → Q6...)',
      2 => 'S1 is low and S0 is high; shift right (DSR → Q0, Q0 → Q1...)',
      3 => 'S1 and S0 are high; parallel load (I/On → Qn)',
    ),
  ),
  7430 => 
  array (
    'description' => '8-input NAND gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc30.74hct30.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'C',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'E',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'F',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'Y',
        'desc' => 'data output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'G',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'H',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, A, B, C, D, E, F, G, H, to Y',
        'val' => 
        array (
          0 => '12 (74HC)',
          1 => '12 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  7432 => 
  array (
    'description' => 'Quad 2-input OR gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc32.74hct32.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3B',
        'desc' => 'data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '4Y',
        'desc' => 'data output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4B',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA, nB to nY',
        'val' => 
        array (
          0 => '6 (74HC)',
          1 => '9 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74365 => 
  array (
    'description' => 'Hex buffer/line driver; 3-state; non-inverting',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc365.74hct365.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~OE~__1',
        'desc' => 'output enable (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Y',
        'desc' => 'bus output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2Y',
        'desc' => 'bus output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '3Y',
        'desc' => 'bus output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '4Y',
        'desc' => 'bus output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '5Y',
        'desc' => 'bus output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '5A',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '6Y',
        'desc' => 'bus output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '6A',
        'desc' => 'data input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~OE~__2',
        'desc' => 'output enable (active low)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA to nY',
        'val' => 
        array (
          0 => '9 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'Setting ~OE~__1 or ~OE~__2 high causes the outputs to assume a high-impedance off state.',
    ),
  ),
  74366 => 
  array (
    'description' => 'Hex buffer/line driver; 3-state; inverting',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc366.74hct366.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~OE~__1',
        'desc' => 'output enable (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Y',
        'desc' => 'bus output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2Y',
        'desc' => 'bus output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '3Y',
        'desc' => 'bus output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '4Y',
        'desc' => 'bus output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '5Y',
        'desc' => 'bus output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '5A',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '6Y',
        'desc' => 'bus output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '6A',
        'desc' => 'data input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~OE~__2',
        'desc' => 'output enable (active low)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA to nY',
        'val' => 
        array (
          0 => '10 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'Setting ~OE~__1 or ~OE~__2 high causes the outputs to assume a high-impedance off state.',
    ),
  ),
  74367 => 
  array (
    'description' => 'Hex buffer/line driver; 3-state; non-inverting',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc367.74hct367.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~OE~__1',
        'desc' => 'output enable (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Y',
        'desc' => 'bus output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2Y',
        'desc' => 'bus output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '3Y',
        'desc' => 'bus output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '4Y',
        'desc' => 'bus output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '5Y',
        'desc' => 'bus output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '5A',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '6Y',
        'desc' => 'bus output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '6A',
        'desc' => 'data input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~OE~__2',
        'desc' => 'output enable (active low)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA to nY',
        'val' => 
        array (
          0 => '8 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'Setting ~OE~__1 or ~OE~__2 high causes the outputs to assume a high-impedance off state.',
    ),
  ),
  74368 => 
  array (
    'description' => 'Hex buffer/line driver; 3-state; inverting',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc368.74hct368.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~OE~__1',
        'desc' => 'output enable (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Y',
        'desc' => 'bus output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2Y',
        'desc' => 'bus output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '3Y',
        'desc' => 'bus output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '4Y',
        'desc' => 'bus output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '5Y',
        'desc' => 'bus output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '5A',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '6Y',
        'desc' => 'bus output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '6A',
        'desc' => 'data input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~OE~__2',
        'desc' => 'output enable (active low)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA to nY',
        'val' => 
        array (
          0 => '9 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'Setting ~OE~__1 or ~OE~__2 high causes the outputs to assume a high-impedance off state.',
    ),
  ),
  74373 => 
  array (
    'description' => 'Octal D-type transparent latch; 3-state',
    'package' => 'DIP',
    'pincount' => 20,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc373.74hct373.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~OE',
        'desc' => 'output enable (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Q0',
        'desc' => 'latch output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'D0',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D1',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Q1',
        'desc' => 'latch output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q2',
        'desc' => 'latch output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'D2',
        'desc' => 'data input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'D3',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Q3',
        'desc' => 'latch output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'LE',
        'desc' => 'latch enable (active high)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q4',
        'desc' => 'latch output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'D4',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'D5',
        'desc' => 'data input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Q5',
        'desc' => 'latch output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Q6',
        'desc' => 'latch output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'D6',
        'desc' => 'data input',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'D7',
        'desc' => 'data input',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'Q7',
        'desc' => 'latch output',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, Dn to Qn',
        'val' => 
        array (
          0 => '12 (74HC)',
          1 => '14 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, LE to Qn',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '13 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74374 => 
  array (
    'description' => 'Octal D-type flip-flop; positive-edge trigger; 3-state',
    'package' => 'DIP',
    'pincount' => 20,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc374.74hct374.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~OE',
        'desc' => 'output enable (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Q0',
        'desc' => 'flip-flop output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'D0',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D1',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Q1',
        'desc' => 'flip-flop output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q2',
        'desc' => 'flip-flop output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'D2',
        'desc' => 'data input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'D3',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Q3',
        'desc' => 'flip-flop output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'CP',
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q4',
        'desc' => 'flip-flop output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'D4',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'D5',
        'desc' => 'data input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Q5',
        'desc' => 'flip-flop output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Q6',
        'desc' => 'flip-flop output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'D6',
        'desc' => 'data input',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'D7',
        'desc' => 'data input',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'Q7',
        'desc' => 'flip-flop output',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Qn',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '13 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '77 (74HC)',
          1 => '48 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
  ),
  74377 => 
  array (
    'description' => 'Octal D-type flip-flop with data enable; positive-edge trigger',
    'package' => 'DIP',
    'pincount' => 20,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc377.74hct377.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~E',
        'desc' => 'data enable (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Q0',
        'desc' => 'flip-flop output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'D0',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D1',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Q1',
        'desc' => 'flip-flop output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q2',
        'desc' => 'flip-flop output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'D2',
        'desc' => 'data input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'D3',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Q3',
        'desc' => 'flip-flop output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'CP',
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q4',
        'desc' => 'flip-flop output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'D4',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'D5',
        'desc' => 'data input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Q5',
        'desc' => 'flip-flop output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Q6',
        'desc' => 'flip-flop output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'D6',
        'desc' => 'data input',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'D7',
        'desc' => 'data input',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'Q7',
        'desc' => 'flip-flop output',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Qn',
        'val' => 
        array (
          0 => '13 (74HC)',
          1 => '14 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '77 (74HC)',
          1 => '53 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
  ),
  74390 => 
  array (
    'description' => 'Dual decade ripple counter',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc390.74hct390.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1~CP~__0',
        'desc' => 'clock input, divide-by-2 section (high-to-low, edge-triggered)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1MR',
        'desc' => 'asynchronous master reset (active high)',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Q__0',
        'desc' => 'flip-flop output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1~CP~__1',
        'desc' => 'clock input, divide-by-5 section (high-to-low, edge-triggered)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1Q__1',
        'desc' => 'flip-flop output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1Q__2',
        'desc' => 'flip-flop output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '1Q__3',
        'desc' => 'flip-flop output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2Q__3',
        'desc' => 'flip-flop output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2Q__2',
        'desc' => 'flip-flop output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2Q__1',
        'desc' => 'flip-flop output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2~CP~__1',
        'desc' => 'clock input, divide-by-5 section (high-to-low, edge-triggered)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2Q__0',
        'desc' => 'flip-flop output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '2MR',
        'desc' => 'asynchronous master reset (active high)',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '2~CP~__0',
        'desc' => 'clock input, divide-by-2 section (high-to-low, edge-triggered)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, n~CP~__0 to nQ__0',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '18 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, n~CP~__1 to nQ__1',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, n~CP~__1 to nQ__2',
        'val' => 
        array (
          0 => '23 (74HC)',
          1 => '26 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Propagation delay, n~CP~__1 to nQ__3',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '19 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      4 => 
      array (
        'param' => 'Propagation delay, nMR to nQ__n',
        'val' => 
        array (
          0 => '16 (74HC)',
          1 => '18 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      5 => 
      array (
        'param' => 'Maximum clock frequency, n~CP~__0 and n~CP~__1',
        'val' => 
        array (
          0 => '66 (74HC)',
          1 => '61 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
  ),
  74393 => 
  array (
    'description' => 'Dual 4-bit binary ripple counter',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc393.74hct393.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1~CP',
        'desc' => 'clock input (high-to-low, edge-triggered)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1MR',
        'desc' => 'asynchronous master reset (active high)',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Q0',
        'desc' => 'flip-flop output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1Q1',
        'desc' => 'flip-flop output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1Q2',
        'desc' => 'flip-flop output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1Q3',
        'desc' => 'flip-flop output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '2Q3',
        'desc' => 'flip-flop output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2Q2',
        'desc' => 'flip-flop output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2Q1',
        'desc' => 'flip-flop output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2Q0',
        'desc' => 'flip-flop output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2MR',
        'desc' => 'asynchronous master reset (active high)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2~CP',
        'desc' => 'clock input (high-to-low, edge-triggered)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, n~CP to nQ0',
        'val' => 
        array (
          0 => '12 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, nQx to nQ(x+1)',
        'val' => 
        array (
          0 => '5 (74HC)',
          1 => '6 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, nMR to nQx',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '99 (74HC)',
          1 => '53 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
  ),
  7442 => 
  array (
    'description' => 'BCD to decimal decoder (1-of-10)',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc42.74hct42.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~Y~__0',
        'desc' => 'output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '~Y~__1',
        'desc' => 'output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '~Y~__2',
        'desc' => 'output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '~Y~__3',
        'desc' => 'output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '~Y~__4',
        'desc' => 'output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '~Y~__5',
        'desc' => 'output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '~Y~__6',
        'desc' => 'output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '~Y~__7',
        'desc' => 'output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '~Y~__8',
        'desc' => 'output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '~Y~__9',
        'desc' => 'output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'A__3',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'A__2',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'A__1',
        'desc' => 'data input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'A__0',
        'desc' => 'data input',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'propagation delay, A__n to ~Y~__n',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74423 => 
  array (
    'description' => 'Dual retriggerable monostable multivibrator with reset',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc423.74hct423.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1~A',
        'desc' => 'negative-edge triggered input 1',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1B',
        'desc' => 'positive-edge triggered input 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1~R~D',
        'desc' => 'direct reset (active low) 1',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1~Q',
        'desc' => 'active low output 1',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2Q',
        'desc' => 'active high output 2',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2CEXT',
        'desc' => 'external capacitor connection 2',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2REXT/CEXT',
        'desc' => 'external resistor and capacitor connection 2',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2~A',
        'desc' => 'negative-edge triggered input 2',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2B',
        'desc' => 'positive-edge triggered input 2',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2~R~D',
        'desc' => 'direct reset (active low) 2',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2~Q',
        'desc' => 'active low output 2',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '1Q',
        'desc' => 'active high output 1',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '1CEXT',
        'desc' => 'external capacitor connection 1',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '1REXT/CEXT',
        'desc' => 'external resistor and capacitor connection 1',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, n~R~D, n~A, nB to nQ or n~Q',
        'val' => 
        array (
          0 => '25 (74HC)',
          1 => '26(74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, n~R~D to nQ or n~Q',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '22 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Output transition time',
        'val' => 
        array (
          0 => '7 (74HC/HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Retrigger time n~A, nB',
        'val' => 
        array (
          0 => '110 (74HC/HCT)',
        ),
        'unit' => 'ns',
      ),
      4 => 
      array (
        'param' => 'External timing resistor',
        'val' => 
        array (
          0 => '2 (min)',
          1 => '1000 (max)',
        ),
        'unit' => 'kΩ',
      ),
    ),
    'notes' => 
    array (
      0 => 'The 74423 is identical to the 74123, except it cannot be triggered via the reset input.',
    ),
  ),
  74540 => 
  array (
    'description' => 'Octal buffer/line driver; 3-state; inverting',
    'package' => 'DIP',
    'pincount' => 20,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc540.74hct540.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~OE~1',
        'desc' => 'output enable (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'A__0',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A__1',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'A__2',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'A__3',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'A__4',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'A__5',
        'desc' => 'data input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'A__6',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'A__7',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '~Y~__7',
        'desc' => 'bus output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '~Y~__6',
        'desc' => 'bus output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '~Y~__5',
        'desc' => 'bus output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '~Y~__4',
        'desc' => 'bus output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~Y~__3',
        'desc' => 'bus output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => '~Y~__2',
        'desc' => 'bus output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => '~Y~__1',
        'desc' => 'bus output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => '~Y~__0',
        'desc' => 'bus output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => '~OE~__2',
        'desc' => 'output enable (active low)',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, A__n to ~Y~__n',
        'val' => 
        array (
          0 => '9 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74541 => 
  array (
    'description' => 'Octal buffer/line driver; 3-state; non-inverting',
    'package' => 'DIP',
    'pincount' => 20,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc541.74hct541.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~OE~1',
        'desc' => 'output enable (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'A__0',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A__1',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'A__2',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'A__3',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'A__4',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'A__5',
        'desc' => 'data input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'A__6',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'A__7',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'Y__7',
        'desc' => 'bus output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Y__6',
        'desc' => 'bus output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Y__5',
        'desc' => 'bus output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Y__4',
        'desc' => 'bus output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Y__3',
        'desc' => 'bus output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Y__2',
        'desc' => 'bus output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'Y__1',
        'desc' => 'bus output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'Y__0',
        'desc' => 'bus output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => '~OE~__2',
        'desc' => 'output enable (active low)',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, A__n to Y__n',
        'val' => 
        array (
          0 => '10 (74HC)',
          1 => '12 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74563 => 
  array (
    'description' => 'Octal D-type transparent latch; 3-state; inverting',
    'package' => 'DIP',
    'pincount' => 20,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc563.74hct563.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~OE',
        'desc' => 'output enable (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'D__0',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'D__1',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D__2',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'D__3',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'D__4',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'D__5',
        'desc' => 'data input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'D__6',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'D__7',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'LE',
        'desc' => 'latch enable (active high)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '~Q~__7',
        'desc' => 'latch output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '~Q~__6',
        'desc' => 'latch output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '~Q~__5',
        'desc' => 'latch output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~Q~__4',
        'desc' => 'latch output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => '~Q~__3',
        'desc' => 'latch output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => '~Q~__2',
        'desc' => 'latch output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => '~Q~__1',
        'desc' => 'latch output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => '~Q~__0',
        'desc' => 'latch output',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, D__n, LE to ~Q~__n',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '16 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74564 => 
  array (
    'description' => 'Octal D-type flip-flop; positive-edge trigger; 3-state; inverting',
    'package' => 'DIP',
    'pincount' => 20,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc564.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~OE',
        'desc' => 'output enable (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'D__0',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'D__1',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D__2',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'D__3',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'D__4',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'D__5',
        'desc' => 'data input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'D__6',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'D__7',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'CP',
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '~Q~__7',
        'desc' => 'flip-flop output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '~Q~__6',
        'desc' => 'flip-flop output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '~Q~__5',
        'desc' => 'flip-flop output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~Q~__4',
        'desc' => 'flip-flop output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => '~Q~__3',
        'desc' => 'flip-flop output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => '~Q~__2',
        'desc' => 'flip-flop output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => '~Q~__1',
        'desc' => 'flip-flop output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => '~Q~__0',
        'desc' => 'flip-flop output',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to ~Q~__n',
        'val' => '15 (74HC)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => '127 (74HC)',
        'unit' => 'MHz',
      ),
    ),
  ),
  74573 => 
  array (
    'description' => 'Octal D-type transparent latch; 3-state; non-inverting',
    'package' => 'DIP',
    'pincount' => 20,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc573.74hct573.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~OE',
        'desc' => 'output enable (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'D__0',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'D__1',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D__2',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'D__3',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'D__4',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'D__5',
        'desc' => 'data input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'D__6',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'D__7',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'LE',
        'desc' => 'latch enable (active high)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q__7',
        'desc' => 'latch output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Q__6',
        'desc' => 'latch output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Q__5',
        'desc' => 'latch output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Q__4',
        'desc' => 'latch output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Q__3',
        'desc' => 'latch output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'Q__2',
        'desc' => 'latch output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'Q__1',
        'desc' => 'latch output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'Q__0',
        'desc' => 'latch output',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, D__n to Q__n',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '17 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, LE to Q__n',
        'val' => '15 (74HC/HCT)',
        'unit' => 'ns',
      ),
    ),
  ),
  74574 => 
  array (
    'description' => 'Octal D-type flip-flop; positive-edge trigger; 3-state; non-inverting',
    'package' => 'DIP',
    'pincount' => 20,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc574.74hct574.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~OE',
        'desc' => 'output enable (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'D__0',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'D__1',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D__2',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'D__3',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'D__4',
        'desc' => 'data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'D__5',
        'desc' => 'data input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'D__6',
        'desc' => 'data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'D__7',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'CP',
        'desc' => 'clock input (low-to-high, edge-triggered)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q__7',
        'desc' => 'flip-flop output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Q__6',
        'desc' => 'flip-flop output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Q__5',
        'desc' => 'flip-flop output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Q__4',
        'desc' => 'flip-flop output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Q__3',
        'desc' => 'flip-flop output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'Q__2',
        'desc' => 'flip-flop output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'Q__1',
        'desc' => 'flip-flop output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'Q__0',
        'desc' => 'flip-flop output',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CP to Q__n',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '123 (74HC)',
          1 => '76 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
  ),
  7458 => 
  array (
    'description' => 'Dual AND-OR gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc58.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2C',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2D',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2Y',
        'desc' => 'data output (2A · 2B) + (2C · 2D)',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '1Y',
        'desc' => 'data output (1A · 1B · 1C) + (1D · 1E · 1F)',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '1D',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '1E',
        'desc' => 'data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '1F',
        'desc' => 'data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '1C',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, 1n to 1Y',
        'val' => '11 (74HC)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, 2n to 2Y',
        'val' => '9 (74HC)',
        'unit' => 'ns',
      ),
    ),
  ),
  74590 => 
  array (
    'description' => '8-bit binary counter with output register; 3-state',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc590.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'Q1',
        'desc' => 'parallel data output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Q2',
        'desc' => 'parallel data output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Q3',
        'desc' => 'parallel data output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Q4',
        'desc' => 'parallel data output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Q5',
        'desc' => 'parallel data output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q6',
        'desc' => 'parallel data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Q7',
        'desc' => 'parallel data output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '~RCO',
        'desc' => 'ripple carry output (active low)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '~MRC',
        'desc' => 'master reset (active low)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'CPC',
        'desc' => 'counter clock input (active high)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '~CE',
        'desc' => 'count enable (active low)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'CPR',
        'desc' => 'register clock input (active high)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '~OE',
        'desc' => 'output enable (active low)',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Q0',
        'desc' => 'parallel data output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, CPR to ~RCO',
        'val' => '19 (74HC)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, CPR to Qn',
        'val' => '18 (74HC)',
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Maximum frequency, CPC and CPR',
        'val' => '52 (74HC)',
        'unit' => 'MHz',
      ),
    ),
  ),
  74594 => 
  array (
    'description' => '8-bit shift register with output register',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc594.74hct594.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'Q1',
        'desc' => 'parallel data output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Q2',
        'desc' => 'parallel data output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Q3',
        'desc' => 'parallel data output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Q4',
        'desc' => 'parallel data output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Q5',
        'desc' => 'parallel data output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q6',
        'desc' => 'parallel data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Q7',
        'desc' => 'parallel data output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Q7S',
        'desc' => 'serial data output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '~SHR',
        'desc' => 'shift register reset (active low)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'SHCP',
        'desc' => 'shift register clock input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'STCP',
        'desc' => 'storage register clock input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '~STR',
        'desc' => 'storage register reset (active low)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'DS',
        'desc' => 'serial data input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Q0',
        'desc' => 'parallel data output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, SHCP to Q7S',
        'val' => 
        array (
          0 => '13 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, STCP to Qn',
        'val' => 
        array (
          0 => '13 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Maximum frequency, SHCP or STCP',
        'val' => 
        array (
          0 => '100 (74HC/74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
  ),
  74595 => 
  array (
    'description' => '8-bit serial-in, serial or parallel-out shift register with output latches; 3-state',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/74HC_HCT595_4.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'Q1',
        'desc' => 'parallel data output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Q2',
        'desc' => 'parallel data output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Q3',
        'desc' => 'parallel data output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Q4',
        'desc' => 'parallel data output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Q5',
        'desc' => 'parallel data output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q6',
        'desc' => 'parallel data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Q7',
        'desc' => 'parallel data output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Q7\'',
        'desc' => 'serial data output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '~MR',
        'desc' => 'master reset (active low)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'SCK',
        'desc' => 'shift register clock input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'RCK',
        'desc' => 'storage register latch input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '~OE',
        'desc' => 'output enable (active low)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'DS',
        'desc' => 'serial data input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'Q0',
        'desc' => 'parallel data output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, SCK to Q7\'',
        'val' => 
        array (
          0 => '19 (74HC)',
          1 => '25 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, SCK to Qn',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '24 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~MR to Q7\'',
        'val' => 
        array (
          0 => '100 (74HC)',
          1 => '52 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum clock frequency, SCK and RCK',
        'val' => 
        array (
          0 => '100 (74HC)',
          1 => '57 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
  ),
  74597 => 
  array (
    'description' => '8-bit shift register with input flip-flops',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc597.74hct597.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'D__1',
        'desc' => 'parallel data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'D__2',
        'desc' => 'parallel data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'D__3',
        'desc' => 'parallel data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D__4',
        'desc' => 'parallel data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'D__5',
        'desc' => 'parallel data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'D__6',
        'desc' => 'parallel data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'D__7',
        'desc' => 'parallel data input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Q',
        'desc' => 'serial data output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '~MR',
        'desc' => 'asynchronous master reset (active low)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'SH__CP',
        'desc' => 'shift clock input (low-to-high, edge-triggered)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'ST__CP',
        'desc' => 'storage clock input (low-to-high, edge-triggered)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '~PL',
        'desc' => 'parallel load input (active low)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'D__S',
        'desc' => 'serial data input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'D__0',
        'desc' => 'parallel data input',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, SH__CP to Q',
        'val' => 
        array (
          0 => '17 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ST__CP to Q',
        'val' => 
        array (
          0 => '25 (74HC)',
          1 => '29 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, ~PL to Q',
        'val' => 
        array (
          0 => '21 (74HC)',
          1 => '26 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum clock frequency, SH__CP',
        'val' => 
        array (
          0 => '96 (74HC)',
          1 => '83 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
  ),
  74640 => 
  array (
    'description' => 'Octal bus transceiver; 3-state; inverting',
    'package' => 'DIP',
    'pincount' => 20,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc640.74hct640.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'DIR',
        'desc' => 'direction control',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'A__0',
        'desc' => 'data input/output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A__1',
        'desc' => 'data input/output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'A__2',
        'desc' => 'data input/output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'A__3',
        'desc' => 'data input/output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'A__4',
        'desc' => 'data input/output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'A__5',
        'desc' => 'data input/output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'A__6',
        'desc' => 'data input/output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'A__7',
        'desc' => 'data input/output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'B__7',
        'desc' => 'data input/output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'B__6',
        'desc' => 'data input/output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'B__5',
        'desc' => 'data input/output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'B__4',
        'desc' => 'data input/output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'B__3',
        'desc' => 'data input/output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'B__2',
        'desc' => 'data input/output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'B__1',
        'desc' => 'data input/output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'B__0',
        'desc' => 'data input/output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => '~OE',
        'desc' => 'output enable (active low)',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, A__n to B__n',
        'val' => '11 (74HC/HCT)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, B__n to A__n',
        'val' => 
        array (
          0 => '9 (74HC)',
          1 => '11 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  74646 => 
  array (
    'description' => 'Octal bus transceiver/register; 3-state',
    'package' => 'DIP',
    'pincount' => 24,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc646.74hct646.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'CP__AB',
        'desc' => 'A to B clock input (low-to-high, edge-triggered)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'S__AB',
        'desc' => 'select A to B source input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'DIR',
        'desc' => 'direction control input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'A__0',
        'desc' => 'A data input/output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'A__1',
        'desc' => 'A data input/output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'A__2',
        'desc' => 'A data input/output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'A__3',
        'desc' => 'A data input/output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'A__4',
        'desc' => 'A data input/output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'A__5',
        'desc' => 'A data input/output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'A__6',
        'desc' => 'A data input/output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'A__7',
        'desc' => 'A data input/output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'B__7',
        'desc' => 'B data input/output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'B__6',
        'desc' => 'B data input/output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'B__5',
        'desc' => 'B data input/output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'B__4',
        'desc' => 'B data input/output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'B__3',
        'desc' => 'B data input/output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'B__2',
        'desc' => 'B data input/output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'B__1',
        'desc' => 'B data input/output',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'B__0',
        'desc' => 'B data input/output',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => '~OE',
        'desc' => 'output enable (active low)',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'S__BA',
        'desc' => 'select B to A source input',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'CP__BA',
        'desc' => 'B to A clock input (low-to-high, edge-triggered)',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, A__n, B__n to B__n, A__n',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '13 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '69 (74HC)',
          1 => '85 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
  ),
  74652 => 
  array (
    'description' => 'Octal bus transceiver/register; 3-state',
    'package' => 'DIP',
    'pincount' => 24,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc652.74hct652.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'CP__AB',
        'desc' => 'A to B clock input (low-to-high, edge-triggered)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'S__AB',
        'desc' => 'select A to B source input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'OE__AB',
        'desc' => 'output enable A to B',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'A__0',
        'desc' => 'A data input/output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'A__1',
        'desc' => 'A data input/output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'A__2',
        'desc' => 'A data input/output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'A__3',
        'desc' => 'A data input/output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'A__4',
        'desc' => 'A data input/output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'A__5',
        'desc' => 'A data input/output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'A__6',
        'desc' => 'A data input/output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'A__7',
        'desc' => 'A data input/output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'B__7',
        'desc' => 'B data input/output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'B__6',
        'desc' => 'B data input/output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'B__5',
        'desc' => 'B data input/output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'B__4',
        'desc' => 'B data input/output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'B__3',
        'desc' => 'B data input/output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'B__2',
        'desc' => 'B data input/output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'B__1',
        'desc' => 'B data input/output',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'B__0',
        'desc' => 'B data input/output',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => '~OE~__BA',
        'desc' => 'output enable B to A (active low)',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'S__BA',
        'desc' => 'select B to A source input',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'CP__BA',
        'desc' => 'B to A clock input (low-to-high, edge-triggered)',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, A__n/B__n to B__n/A__n',
        'val' => '13 (74HC/HCT)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, CP__AB/CP__BA to B__n/A__n',
        'val' => 
        array (
          0 => '18 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, S__AB/S__BA to B__n/A__n',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '23 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => '92 (74HC/HCT)',
        'unit' => 'MHz',
      ),
    ),
  ),
  74670 => 
  array (
    'description' => '4 by 4 register file; 3-state',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc670.74hct670.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'D__1',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'D__2',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'D__3',
        'desc' => 'data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'R__B',
        'desc' => 'read address input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'R__A',
        'desc' => 'read address input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q__3',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Q__2',
        'desc' => 'data output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Q__1',
        'desc' => 'data output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'Q__0',
        'desc' => 'data output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '~RE',
        'desc' => '3-state output read enable (active low)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '~WE',
        'desc' => 'write enable (active low)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'W__B',
        'desc' => 'write address input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'W__A',
        'desc' => 'write address input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'D__0',
        'desc' => 'data input',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, D__n to Q__n',
        'val' => '23 (74HC/HCT]',
        'unit' => 'ns',
      ),
    ),
  ),
  74688 => 
  array (
    'description' => '8-bit magnitude comparator',
    'package' => 'DIP',
    'pincount' => 20,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc688.74hct688.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~E',
        'desc' => 'enable (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'P__0',
        'desc' => 'word input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'Q__0',
        'desc' => 'word input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'P__1',
        'desc' => 'word input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Q__1',
        'desc' => 'word input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'P__2',
        'desc' => 'word input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Q__2',
        'desc' => 'word input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'P__3',
        'desc' => 'word input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Q__3',
        'desc' => 'word input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'P__4',
        'desc' => 'word input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q__4',
        'desc' => 'word input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'P__5',
        'desc' => 'word input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Q__5',
        'desc' => 'word input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'P__6',
        'desc' => 'word input',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Q__6',
        'desc' => 'word input',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'P__7',
        'desc' => 'word input',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'Q__7',
        'desc' => 'word input',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => '~P=Q~',
        'desc' => 'equal-to output (low when P = Q)',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, P__n, Q__n to ~P=Q~',
        'val' => '17 (74HC/HCT)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, ~E to ~P=Q~',
        'val' => 
        array (
          0 => '8 (74HC)',
          1 => '12 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  7473 => 
  array (
    'description' => 'Dual J-K flip-flop with reset; negative-edge trigger',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc73.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1~CP',
        'desc' => 'clock input (high-to-low edge-triggered)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1~R',
        'desc' => 'asynchronous reset (active low)',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1K',
        'desc' => 'synchronous K input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2~CP',
        'desc' => 'clock input (high-to-low edge-triggered)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2~R',
        'desc' => 'asynchronous reset (active low)',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2J',
        'desc' => 'synchronous J input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '2~Q',
        'desc' => 'complement output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2Q',
        'desc' => 'true output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2K',
        'desc' => 'synchronous K input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '1Q',
        'desc' => 'true output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '1~Q',
        'desc' => 'complement output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '1J',
        'desc' => 'synchronous J input',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, n~CP to nQ',
        'val' => '16 (74HC)',
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, n~CP to n~Q',
        'val' => '16 (74HC)',
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, n~R to nQ, n~Q',
        'val' => '15 (74HC)',
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum frequency',
        'val' => '77 (74HC)',
        'unit' => 'MHz',
      ),
    ),
  ),
  7474 => 
  array (
    'description' => 'Dual D-type flip-flop with set and reset; positive-edge trigger',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc74.74hct74.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1~R~D',
        'desc' => 'asynchronous reset-direct input (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1D',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1CP',
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '1~S~D',
        'desc' => 'asynchronous set-direct input (active low)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '1Q',
        'desc' => 'true output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '1~Q',
        'desc' => 'complement output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '2~Q',
        'desc' => 'complement output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '2Q',
        'desc' => 'true output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '2~S~D',
        'desc' => 'asynchronous set-direct input (active low)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '2CP',
        'desc' => 'clock input (low-to-high edge-triggered)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '2D',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '2~R~D',
        'desc' => 'asynchronous reset-direct input (active low)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nCP to nQ, n~Q',
        'val' => 
        array (
          0 => '14 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, n~S~D to nQ, n~Q',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '18 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, n~R~D to nQ, n~Q',
        'val' => 
        array (
          0 => '16 (74HC)',
          1 => '18 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '76 (74HC)',
          1 => '59 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
  ),
  7475 => 
  array (
    'description' => 'Quad bistable transparent latch',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/74HC75_3.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1~Q',
        'desc' => 'complementary latch output 1',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1D',
        'desc' => 'data input 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '2D',
        'desc' => 'data input 2',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'LE34',
        'desc' => 'latch enable input for latches 3 and 4',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '3D',
        'desc' => 'data input 3',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '4D',
        'desc' => 'data input 4',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '4~Q',
        'desc' => 'complementary latch output 4',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '4Q',
        'desc' => 'latch output 4',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3Q',
        'desc' => 'latch output 3',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '3~Q',
        'desc' => 'complementary latch output 3',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'LE12',
        'desc' => 'latch enable input for latches 1 and 2',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '2~Q',
        'desc' => 'complementary latch output 2',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '2Q',
        'desc' => 'latch output 2',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => '1Q',
        'desc' => 'latch output 1',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay',
        'val' => '11 (74HC)',
        'unit' => 'ns',
      ),
    ),
  ),
  7485 => 
  array (
    'description' => '4-bit magnitude comparator',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc85.74hct85.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'B__3',
        'desc' => 'word B input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'I__A<B',
        'desc' => 'A < B expansion input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'I__A=B',
        'desc' => 'A = B expansion input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'I__A>B',
        'desc' => 'A > B expansion input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Q__A>B',
        'desc' => 'A > B output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Q__A=B',
        'desc' => 'A = B output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Q__A<B',
        'desc' => 'A < B output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'B__0',
        'desc' => 'word B input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'A__0',
        'desc' => 'word A input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'B__1',
        'desc' => 'word B input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'A__1',
        'desc' => 'word A input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'A__2',
        'desc' => 'word A input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'B__2',
        'desc' => 'word B input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'A__3',
        'desc' => 'word A input',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, A__n, B__n to Q__A>B, Q__A<B',
        'val' => 
        array (
          0 => '20 (74HC)',
          1 => '22 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Propagation delay, A__n, B__n to Q__A=B',
        'val' => 
        array (
          0 => '18 (74HC)',
          1 => '20 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Propagation delay, I__A<B, I__A=B, I__A>B to Q__A<B, Q__A>B',
        'val' => 
        array (
          0 => '15 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Propagation delay, I__A=B to Q__A=B',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
    'notes' => 
    array (
      0 => 'The least significant (or only) comparator in a chain should have I__A<B and I__A>B tied low and I__A=B tied high.',
      1 => 'To compare more than 4 bits, connect the outputs to the expansion inputs of the next significant comparator.',
    ),
  ),
  7486 => 
  array (
    'description' => 'Quad 2-input XOR gate',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/74HC_HCT86_CNV_2.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1A',
        'desc' => 'data input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1B',
        'desc' => 'data input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Y',
        'desc' => 'data output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '2A',
        'desc' => 'data input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2B',
        'desc' => 'data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2Y',
        'desc' => 'data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3Y',
        'desc' => 'data output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3A',
        'desc' => 'data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3B',
        'desc' => 'data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '4Y',
        'desc' => 'data output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4A',
        'desc' => 'data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4B',
        'desc' => 'data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, nA, nB to nY',
        'val' => 
        array (
          0 => '11 (74HC)',
          1 => '14 (74HCT)',
        ),
        'unit' => 'ns',
      ),
    ),
  ),
  7490 => 
  array (
    'description' => '4-bit decade counter',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/sn74ls90.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'CKB',
        'desc' => 'clock input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'R0(1)',
        'desc' => 'reset to 0',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'R0(2)',
        'desc' => 'reset to 0',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'R9(1)',
        'desc' => 'reset to 9',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'R9(2)',
        'desc' => 'reset to 9',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'Q__C',
        'desc' => 'counter output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Q__B',
        'desc' => 'counter output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'Q__D',
        'desc' => 'counter output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q__A',
        'desc' => 'counter output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'CKA',
        'desc' => 'clock input',
      ),
    ),
    'notes' => 
    array (
      0 => 'For maximum count length, connect CKB to Q__A and apply input pulses to CKA.',
    ),
  ),
  7493 => 
  array (
    'description' => '4-bit binary ripple counter',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => '7400',
    'datasheet' => 'http://www.standardics.nxp.com/products/hc/datasheet/74hc93.74hct93.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~CP~__1',
        'desc' => 'clock input, 2nd, 3rd and 4th section (high-to-low edge-triggered)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'MR__1',
        'desc' => 'asynchronous master reset',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'MR__2',
        'desc' => 'asynchronous master reset',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'Q__2',
        'desc' => 'counter output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'Q__1',
        'desc' => 'counter output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'Q__3',
        'desc' => 'counter output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'Q__0',
        'desc' => 'counter output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '~CP~__0',
        'desc' => 'clock input, 1st section (high-to-low edge-triggered)',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Propagation delay, ~CP~__0 to Q__0',
        'val' => 
        array (
          0 => '12 (74HC)',
          1 => '15 (74HCT)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '100 (74HC)',
          1 => '77 (74HCT)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'State changes of Q__n outputs do not occur simultaneously.',
      1 => 'Setting both MR__1 and MR__2 high resets the counter to zero.',
      2 => 'For a 4-bit counter, connect Q__0 to ~CP~__1, and apply count pulses to ~CP~__0.',
      3 => 'For a 3-bit counter, apply count pulses to ~CP~__1.',
    ),
  ),
  8254 => 
  array (
    'description' => 'Programmable interval timer',
    'aliases' => 
    array (
      0 => '82C54',
    ),
    'package' => 'DIP',
    'pincount' => 24,
    'family' => 'Intel',
    'datasheet' => 'http://www.scs.stanford.edu/10wi-cs140/pintos/specs/8254.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'D7',
        'desc' => 'data bus',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'D6',
        'desc' => 'data bus',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'D5',
        'desc' => 'data bus',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'D4',
        'desc' => 'data bus',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'D3',
        'desc' => 'data bus',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'D2',
        'desc' => 'data bus',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'D1',
        'desc' => 'data bus',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'D0',
        'desc' => 'data bus',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'CLK 0',
        'desc' => 'counter 0 clock input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'OUT 0',
        'desc' => 'counter 0 output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'GATE 0',
        'desc' => 'counter 0 gate input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'OUT 1',
        'desc' => 'counter 1 output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'GATE 1',
        'desc' => 'counter 1 gate input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'CLK 1',
        'desc' => 'counter 1 clock input',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'GATE 2',
        'desc' => 'counter 2 gate input',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'OUT 2',
        'desc' => 'counter 2 output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'CLK 2',
        'desc' => 'counter 2 clock input',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'A0',
        'desc' => 'address bus',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'A1',
        'desc' => 'address bus',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => '~CS',
        'desc' => 'chip select (active low)',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => '~RD',
        'desc' => 'read enable (active low)',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => '~WR',
        'desc' => 'write enable (active low)',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum clock input frequency',
        'val' => 
        array (
          0 => '8 (8254)',
          1 => '10 (8254-2)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'Register 00: counter 0 value',
      1 => 'Register 01: counter 1 value',
      2 => 'Register 10: counter 2 value',
      3 => 'Register 11: control word',
      4 => 'Control word:
<table>
<tr><td>Bit 0</td><td>0=binary (16 bits), 1=BCD (4 decades)</td></tr>
<tr><td>Bits 1-3</td><td>mode select</td></tr>
<tr><td>Bits 4-5</td><td>read/write mode</td></tr>
<tr><td>Bits 6-7</td><td>select counter/read-back mode</td></tr>
</table><br/>',
      5 => 'Mode 0: interrupt on terminal count',
      6 => 'Mode 1: hardware retriggerable one-shot',
      7 => 'Mode 2: rate generator',
      8 => 'Mode 3: square wave',
      9 => 'Mode 4: software triggered strobe',
      10 => 'Mode 5: hardware triggered strobe (retriggerable)',
    ),
  ),
  '8255A' => 
  array (
    'description' => 'Programmable peripheral interface',
    'aliases' => 
    array (
      0 => '82C55A',
    ),
    'package' => 'DIP',
    'pincount' => 40,
    'family' => 'Intel',
    'datasheet' => 'http://www.intersil.com/data/fn/fn2969.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'PA3',
        'desc' => 'port A',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'PA2',
        'desc' => 'port A',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'PA1',
        'desc' => 'port A',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'PA0',
        'desc' => 'port A',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '~RD',
        'desc' => 'read enable (active low)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '~CS',
        'desc' => 'chip select (active low)',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'A1',
        'desc' => 'address input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'A0',
        'desc' => 'address input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'PC7',
        'desc' => 'port C',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'PC6',
        'desc' => 'port C',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'PC5',
        'desc' => 'port C',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'PC4',
        'desc' => 'port C',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'PC0',
        'desc' => 'port C',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'PC1',
        'desc' => 'port C',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'PC2',
        'desc' => 'port C',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'PC3',
        'desc' => 'port C',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'PB0',
        'desc' => 'port B',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'PB1',
        'desc' => 'port B',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'PB2',
        'desc' => 'port B',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'PB3',
        'desc' => 'port B',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'PB4',
        'desc' => 'port B',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'PB5',
        'desc' => 'port B',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'PB6',
        'desc' => 'port B',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'PB7',
        'desc' => 'port B',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'D7',
        'desc' => 'data bus',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'D6',
        'desc' => 'data bus',
      ),
      28 => 
      array (
        'num' => '29',
        'sym' => 'D5',
        'desc' => 'data bus',
      ),
      29 => 
      array (
        'num' => '30',
        'sym' => 'D4',
        'desc' => 'data bus',
      ),
      30 => 
      array (
        'num' => '31',
        'sym' => 'D3',
        'desc' => 'data bus',
      ),
      31 => 
      array (
        'num' => '32',
        'sym' => 'D2',
        'desc' => 'data bus',
      ),
      32 => 
      array (
        'num' => '33',
        'sym' => 'D1',
        'desc' => 'data bus',
      ),
      33 => 
      array (
        'num' => '34',
        'sym' => 'D0',
        'desc' => 'data bus',
      ),
      34 => 
      array (
        'num' => '35',
        'sym' => 'RESET',
        'desc' => 'reset (active high)',
      ),
      35 => 
      array (
        'num' => '36',
        'sym' => '~WR',
        'desc' => 'write enable (active low)',
      ),
      36 => 
      array (
        'num' => '37',
        'sym' => 'PA7',
        'desc' => 'port A',
      ),
      37 => 
      array (
        'num' => '38',
        'sym' => 'PA6',
        'desc' => 'port A',
      ),
      38 => 
      array (
        'num' => '39',
        'sym' => 'PA5',
        'desc' => 'port A',
      ),
      39 => 
      array (
        'num' => '40',
        'sym' => 'PA4',
        'desc' => 'port A',
      ),
    ),
    'notes' => 
    array (
      0 => 'Register 00: read/write port A',
      1 => 'Register 01: read/write port B',
      2 => 'Register 10: read/write port C',
      3 => 'Register 11: read/write control word',
      4 => 'Control word:
<table>
<tr><td>Bit 0</td><td>Port C lower bits; 1=input, 0=output</td></tr>
<tr><td>Bit 1</td><td>Port B; 1=input, 0=output</td></tr>
<tr><td>Bit 2</td><td>Group B mode selection</td></tr>
<tr><td>Bit 3</td><td>Port C upper bits; 1=input, 0=output</td></tr>
<tr><td>Bit 4</td><td>Port A; 1=input, 0=output</td></tr>
<tr><td>Bits 5-6</td><td>Group A mode selection</td></tr>
<tr><td>Bit 7</td><td>1=mode set, 0=bit set/reset</td></tr>
</table><br/>',
      5 => 'When bit 7 of control word is set to 1, the rest of the bits have the following functions:
<table>
<tr><td>Bit 0</td><td>1=set bit, 0=clear bit</td></tr>
<tr><td>Bits 1-3</td><td>specify bit to modify (0-7)</td></tr>
</table>',
    ),
  ),
  'A6278' => 
  array (
    'description' => 'Serial-input constant-current latched LED driver (8 outputs)',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => 'Allegro',
    'datasheet' => 'http://www.allegromicro.com/en/Products/Part_Numbers/6278/6278.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'DATA',
        'desc' => 'serial data in',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'CLOCK',
        'desc' => 'clock input (low-to-high triggered)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'LATCH',
        'desc' => 'data strobe input (active high)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'OUT0',
        'desc' => 'current-sinking output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'OUT1',
        'desc' => 'current-sinking output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'OUT2',
        'desc' => 'current-sinking output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'OUT3',
        'desc' => 'current-sinking output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'OUT4',
        'desc' => 'current-sinking output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'OUT5',
        'desc' => 'current-sinking output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'OUT6',
        'desc' => 'current-sinking output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'OUT7',
        'desc' => 'current-sinking output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '~OE',
        'desc' => 'output enable (active low)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'DATA OUT',
        'desc' => 'serial data out, for cascading',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'REXT',
        'desc' => 'external resistor to ground (sets output current)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  'A6279' => 
  array (
    'description' => 'Serial-input constant-current latched LED driver (16 outputs)',
    'package' => 'DIP',
    'pincount' => 24,
    'family' => 'Allegro',
    'datasheet' => 'http://www.allegromicro.com/en/Products/Part_Numbers/6278/6278.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'DATA',
        'desc' => 'serial data in',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'CLOCK',
        'desc' => 'clock input (low-to-high triggered)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'LATCH',
        'desc' => 'data strobe input (active high)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'OUT0',
        'desc' => 'current-sinking output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'OUT1',
        'desc' => 'current-sinking output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'OUT2',
        'desc' => 'current-sinking output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'OUT3',
        'desc' => 'current-sinking output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'OUT4',
        'desc' => 'current-sinking output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'OUT5',
        'desc' => 'current-sinking output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'OUT6',
        'desc' => 'current-sinking output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'OUT7',
        'desc' => 'current-sinking output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'OUT8',
        'desc' => 'current-sinking output',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'OUT9',
        'desc' => 'current-sinking output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'OUT10',
        'desc' => 'current-sinking output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'OUT11',
        'desc' => 'current-sinking output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'OUT12',
        'desc' => 'current-sinking output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'OUT13',
        'desc' => 'current-sinking output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'OUT14',
        'desc' => 'current-sinking output',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'OUT15',
        'desc' => 'current-sinking output',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => '~OE',
        'desc' => 'output enable (active low)',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'DATA OUT',
        'desc' => 'serial data out, for cascading',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'REXT',
        'desc' => 'external resistor to ground (sets output current)',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
  ),
  'AD7528' => 
  array (
    'description' => 'CMOS dual 8-bit buffered multiplying DAC',
    'package' => 'DIP',
    'pincount' => 20,
    'aliases' => 
    array (
      0 => 'TLC7528',
    ),
    'family' => 'Analog Devices',
    'datasheet' => 'http://www.analog.com/static/imported-files/data_sheets/AD7528.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'AGND',
        'desc' => 'analog ground',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'OUT A',
        'desc' => 'analog current output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'R__FB A',
        'desc' => 'feedback resistor connection',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'V__REF A',
        'desc' => 'input reference voltage',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'DGND',
        'desc' => 'digital ground',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '~DACA/DACB',
        'desc' => 'DAC select',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '(MSB) DB7',
        'desc' => 'parallel data input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'DB6',
        'desc' => 'parallel data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'DB5',
        'desc' => 'parallel data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'DB4',
        'desc' => 'parallel data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'DB3',
        'desc' => 'parallel data input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'DB2',
        'desc' => 'parallel data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'DB1',
        'desc' => 'parallel data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'DB0 (LSB)',
        'desc' => 'parallel data input',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~CS',
        'desc' => 'chip select (active low)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => '~WR',
        'desc' => 'write to data register (active low)',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'V__DD',
        'desc' => 'supply voltage',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'V__REF B',
        'desc' => 'input reference voltage',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'R__FB B',
        'desc' => 'feedback resistor connection',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'OUT B',
        'desc' => 'analog current output',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Settling time, V__DD = 5V',
        'val' => 
        array (
          0 => '400 (AD7528)',
          1 => '100 (TLC7528)',
        ),
        'unit' => 'ns',
      ),
      1 => 
      array (
        'param' => 'Update rate, V__DD = 5V',
        'val' => 
        array (
          0 => '2.5 (AD7528)',
          1 => '10 (TLC7528)',
        ),
        'unit' => 'MHz',
      ),
    ),
  ),
  'AD7805' => 
  array (
    'description' => '+3.3V to +5V quad 10-bit DAC',
    'package' => 'DIP',
    'pincount' => 28,
    'family' => 'Analog Devices',
    'datasheet' => 'http://www.analog.com/static/imported-files/data_sheets/AD7804_7805_7808_7809.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'AGND',
        'desc' => 'analog ground',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'V__OUT B',
        'desc' => 'analog output voltage',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'V__OUT A',
        'desc' => 'analog output voltage',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'REFOUT',
        'desc' => 'reference output (typically 1.23V)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'DB9',
        'desc' => 'parallel data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'DB8',
        'desc' => 'parallel data input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'DB7',
        'desc' => 'parallel data input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'DB6',
        'desc' => 'parallel data input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'DB5',
        'desc' => 'parallel data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'DB4',
        'desc' => 'parallel data input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '~LDAC',
        'desc' => 'DAC register update (active low)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'DB3',
        'desc' => 'parallel data input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'DB2',
        'desc' => 'parallel data input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'DGND',
        'desc' => 'digital ground',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'DV__DD',
        'desc' => 'digital power supply',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => '~WR',
        'desc' => 'write to data register (active low)',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => '~CS',
        'desc' => 'chip select (active low)',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => '~CLR',
        'desc' => 'asynchronous clear (active low)',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'DB1',
        'desc' => 'parallel data input',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'DB0',
        'desc' => 'parallel data input',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'A1',
        'desc' => 'DAC address input',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'A0',
        'desc' => 'DAC address input',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'MODE',
        'desc' => 'mode input',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'REFIN',
        'desc' => 'external reference input',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'COMP',
        'desc' => 'compensation pin',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'V__OUT D',
        'desc' => 'analog output voltge',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'V__OUT C',
        'desc' => 'analog output voltage',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'AV__DD',
        'desc' => 'analog power supply',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Slew rate',
        'val' => '2.5',
        'unit' => 'V/µs',
      ),
      1 => 
      array (
        'param' => 'Settling time',
        'val' => '1.5',
        'unit' => 'µs',
      ),
      2 => 
      array (
        'param' => 'Update rate',
        'val' => '667',
        'unit' => 'kHz',
      ),
      3 => 
      array (
        'param' => 'Output voltage range, twos complement coding',
        'val' => 'Vbias ± 15/16*Vbias',
        'units' => 'V',
      ),
      4 => 
      array (
        'param' => 'Output voltage range, offset binary coding',
        'val' => 'Vbias/16 to 31/16*Vbias',
      ),
    ),
  ),
  'ADC0808' => 
  array (
    'description' => '8-bit A/D converter with 8-channel multiplexer',
    'aliases' => 
    array (
      0 => 'ADC0809',
    ),
    'package' => 'DIP',
    'pincount' => 28,
    'family' => 'National Semiconductor',
    'datasheet' => 'http://www.national.com/ds/DC/ADC0808.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'IN3',
        'desc' => 'analog input 3',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'IN4',
        'desc' => 'analog input 4',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'IN5',
        'desc' => 'analog input 5',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'IN6',
        'desc' => 'analog input 6',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'IN7',
        'desc' => 'analog input 7',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'START',
        'desc' => 'start conversion (active high)',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'EOC',
        'desc' => 'end of conversion (active high)',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'D3',
        'desc' => 'data bus',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'OUTPUT ENABLE',
        'desc' => 'data output enable',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'CLOCK',
        'desc' => 'clock input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'V__CC',
        'desc' => 'supply voltage',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'V__REF(+)',
        'desc' => 'positive voltage reference',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'D1',
        'desc' => 'data bus',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'D2',
        'desc' => 'data bus',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'V__REF(-)',
        'desc' => 'negative voltage reference',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'D0',
        'desc' => 'data bus (LSB)',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'D4',
        'desc' => 'data bus',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'D5',
        'desc' => 'data bus',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'D6',
        'desc' => 'data bus',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'D7',
        'desc' => 'data bus (MSB)',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'ALE',
        'desc' => 'address latch enable (positive-edge trigger)',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'A2',
        'desc' => 'channel select (MSB)',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'A1',
        'desc' => 'channel select',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'A0',
        'desc' => 'channel select (LSB)',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'IN0',
        'desc' => 'analog channel 0',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'IN1',
        'desc' => 'analog channel 1',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'IN2',
        'desc' => 'analog channel 2',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Supply voltage V__CC',
        'val' => '5',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Total unadjusted error',
        'val' => 
        array (
          0 => '±1/2 (ADC0808)',
          1 => '±1 (ADC0809)',
        ),
        'unit' => 'LSB',
      ),
      2 => 
      array (
        'param' => 'Input resistance, V__REF(+) to V__REF(-)',
        'val' => '2.5',
        'unit' => 'kΩ',
      ),
      3 => 
      array (
        'param' => 'Analog input voltage range',
        'val' => 
        array (
          0 => 'GND-0.10 (min)',
          1 => 'Vcc+0.10 (max)',
        ),
        'unit' => 'V',
      ),
      4 => 
      array (
        'param' => 'Minimum START pulse width',
        'val' => '100',
        'unit' => 'ns',
      ),
      5 => 
      array (
        'param' => 'Minimum ALE pulse width',
        'val' => '100',
        'unit' => 'ns',
      ),
      6 => 
      array (
        'param' => 'Analog mux delay time from ALE',
        'val' => '1',
        'unit' => 'µs',
      ),
      7 => 
      array (
        'param' => 'Conversion time (640 kHz clock frequency)',
        'val' => '100',
        'unit' => 'µs',
      ),
      8 => 
      array (
        'param' => 'Clock frequency',
        'val' => 
        array (
          0 => '10 (min)',
          1 => '640 (typical)',
          2 => '1280 (max)',
        ),
        'unit' => 'kHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'The ADC0808 is a more accurate version of the ADC0809.',
    ),
  ),
  'ATMEGA168' => 
  array (
    'name' => 'ATmega168',
    'description' => '8-bit AVR® microcontroller',
    'aliases' => 
    array (
      0 => 'ATmega48',
      1 => 'ATmega88',
      2 => 'ATmega328P',
    ),
    'package' => 'DIP',
    'pincount' => 28,
    'family' => 'Atmel',
    'datasheet' => 'http://www.atmel.com/dyn/resources/prod_documents/doc2545.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '(PCINT14/~RESET) PC6',
        'desc' => 'reset (active low); port C',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '(PCINT16/RXD) PD0',
        'desc' => 'port D',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '(PCINT17/TXD) PD1',
        'desc' => 'port D',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '(PCINT18/INT0) PD2',
        'desc' => 'external interrupt 0; port D',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '(PCINT19/OC2B/INT1) PD3',
        'desc' => 'external interrupt 1; port D',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '(PCINT20/XCK/T0) PD4',
        'desc' => 'port D',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '(PCINT6/XTAL1/TOSC1) PB6',
        'desc' => 'clock oscillator pin 1; port B',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '(PCINT17/XTAL2/TOSC2) PB7',
        'desc' => 'clock oscillator pin 2; port B',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '(PCINT21/OC0B/T1) PD5',
        'desc' => 'port D',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '(PCINT22/OC0A/AIN0) PD6',
        'desc' => 'port D',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '(PCINT23/AIN1) PD7',
        'desc' => 'port D',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '(PCINT0/CLKO/ICP1) PB0',
        'desc' => 'clock output; port B',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'PB1 (OC1A/PCINT1)',
        'desc' => 'port B',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'PB2 (~SS/OC1B/PCINT2)',
        'desc' => 'SPI slave select; port B',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'PB3 (MOSI/OC2A/PCINT3)',
        'desc' => 'SPI master output/slave input; port B',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'PB4 (MISO/PCINT4)',
        'desc' => 'SPI master input/slave output; port B',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'PB5 (SCK/PCINT5)',
        'desc' => 'SPI master clock; port B',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'AVcc',
        'desc' => 'A/D converter supply voltage',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'AREF',
        'desc' => 'analog reference for A/D converter',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'PC0 (ADC0/PCINT8)',
        'desc' => 'port C',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'PC1 (ADC1/PCINT9)',
        'desc' => 'port C',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'PC2 (ADC2/PCINT10)',
        'desc' => 'port C',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'PC3 (ADC3/PCINT11)',
        'desc' => 'port C',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'PC4 (ADC4/SDA/PCINT12)',
        'desc' => 'I2C Data pin; port C',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'PC5 (ADC5/SCL/PCINT13)',
        'desc' => 'I2C Clock pin; port C',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Flash memory',
        'val' => 
        array (
          0 => '4K (ATmega48)',
          1 => '8K (ATmega88)',
          2 => '16K (ATmega168)',
          3 => '32K (ATmega328P)',
        ),
        'unit' => 'bytes',
      ),
      1 => 
      array (
        'param' => 'Internal SRAM',
        'val' => 
        array (
          0 => '512 (ATmega48)',
          1 => '1K (ATmega88)',
          2 => '1K (ATmega168)',
          3 => '2K (ATmega328P)',
        ),
        'unit' => 'bytes',
      ),
      2 => 
      array (
        'param' => 'EEPROM',
        'val' => 
        array (
          0 => '256 (ATmega48)',
          1 => '512 (ATmega88)',
          2 => '512 (ATmega168)',
          3 => '1K (ATmega328P)',
        ),
        'unit' => 'bytes',
      ),
      3 => 
      array (
        'param' => 'Programmable I/O lines',
        'val' => '23',
      ),
      4 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => '20',
        'unit' => 'MHz',
      ),
    ),
  ),
  'ATMEGA32' => 
  array (
    'name' => 'ATmega32',
    'description' => '8-bit AVR® microcontroller',
    'aliases' => 
    array (
      0 => 'ATmega16',
    ),
    'package' => 'DIP',
    'pincount' => 40,
    'family' => 'Atmel',
    'datasheet' => 'http://www.atmel.com/dyn/resources/prod_documents/doc8155.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '(XCK0/T0) PB0',
        'desc' => 'port B',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '(T1) PB1',
        'desc' => 'port B',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '(INT2/AIN0) PB2',
        'desc' => 'external interrupt 2; port B',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '(OC0/AIN1) PB3',
        'desc' => 'port B',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '(~SS~) PB4',
        'desc' => 'SPI slave select; port B',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '(MOSI) PB5',
        'desc' => 'SPI master output/slave input; port B',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '(MISO) PB6',
        'desc' => 'SPI master input/slave output; port B',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '(SCK) PB7',
        'desc' => 'SPI master clock; port B',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '~RESET',
        'desc' => 'reset (active low)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'XTAL2',
        'desc' => 'clock oscillator pin 2',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'XTAL1',
        'desc' => 'clock oscillator pin 1',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '(RXD) PD0',
        'desc' => 'UART receive; port D',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '(TXD) PD1',
        'desc' => 'UART transmit; port D',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => '(INT0) PD2',
        'desc' => 'external interrupt 0; port D',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => '(INT1) PD3',
        'desc' => 'external interrupt 1; port D',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => '(OC1B) PD4',
        'desc' => 'port D',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => '(OC1A) PD5',
        'desc' => 'port D',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => '(ICP1) PD6',
        'desc' => 'port D',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'PD7 (OC2)',
        'desc' => 'port D',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'PC0 (SCL)',
        'desc' => '2-wire clock line; port C',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'PC1 (SDA)',
        'desc' => '2-wire data line; port C',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'PC2 (TCK)',
        'desc' => 'JTAG test clock; port C',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'PC3 (TMS)',
        'desc' => 'JTAG test mode select; port C',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'PC4 (TDO)',
        'desc' => 'JTAG test data output; port C',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'PC5 (TDI)',
        'desc' => 'JTAG test data input; port C',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'PC6 (TOSC1)',
        'desc' => 'timer oscillator pin 1; port C',
      ),
      28 => 
      array (
        'num' => '29',
        'sym' => 'PC7 (TOSC2)',
        'desc' => 'timer oscillator pin 2; port C',
      ),
      29 => 
      array (
        'num' => '30',
        'sym' => 'AVcc',
        'desc' => 'A/D converter supply voltage',
      ),
      30 => 
      array (
        'num' => '31',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      31 => 
      array (
        'num' => '32',
        'sym' => 'AREF',
        'desc' => 'analog reference for A/D converter',
      ),
      32 => 
      array (
        'num' => '33',
        'sym' => 'PA7 (ADC7)',
        'desc' => 'port A',
      ),
      33 => 
      array (
        'num' => '34',
        'sym' => 'PA6 (ADC6)',
        'desc' => 'port A',
      ),
      34 => 
      array (
        'num' => '35',
        'sym' => 'PA5 (ADC5)',
        'desc' => 'port A',
      ),
      35 => 
      array (
        'num' => '36',
        'sym' => 'PA4 (ADC4)',
        'desc' => 'port A',
      ),
      36 => 
      array (
        'num' => '37',
        'sym' => 'PA3 (ADC3)',
        'desc' => 'port A',
      ),
      37 => 
      array (
        'num' => '38',
        'sym' => 'PA2 (ADC2)',
        'desc' => 'port A',
      ),
      38 => 
      array (
        'num' => '39',
        'sym' => 'PA1 (ADC1)',
        'desc' => 'port A',
      ),
      39 => 
      array (
        'num' => '40',
        'sym' => 'PA0 (ADC0)',
        'desc' => 'port A',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Flash memory',
        'val' => 
        array (
          0 => '16K (ATmega16)',
          1 => '32K (ATmega32)',
        ),
        'unit' => 'bytes',
      ),
      1 => 
      array (
        'param' => 'Internal SRAM',
        'val' => 
        array (
          0 => '1K (ATmega16)',
          1 => '2K (ATmega32)',
        ),
        'unit' => 'bytes',
      ),
      2 => 
      array (
        'param' => 'EEPROM',
        'val' => 
        array (
          0 => '512 (ATmega16)',
          1 => '1K (ATmega32)',
        ),
        'unit' => 'bytes',
      ),
      3 => 
      array (
        'param' => 'Programmable I/O lines',
        'val' => '32',
      ),
    ),
  ),
  'ATMEGA644P' => 
  array (
    'name' => 'ATmega644P',
    'description' => '8-bit AVR® microcontroller',
    'aliases' => 
    array (
      0 => 'ATmega164P',
      1 => 'ATmega324P',
      2 => 'ATmega1284P',
    ),
    'package' => 'DIP',
    'pincount' => 40,
    'family' => 'Atmel',
    'datasheet' => 'http://www.atmel.com/dyn/resources/prod_documents/doc8011.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '(PCINT8/XCK0/T0) PB0',
        'desc' => 'port B',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '(PCINT9/CLKO/T1) PB1',
        'desc' => 'clock output; port B',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '(PCINT10/INT2/AIN0) PB2',
        'desc' => 'external interrupt 2; port B',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '(PCINT11/OC0A/AIN1) PB3',
        'desc' => 'port B',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '(PCINT12/OC0B/~SS~) PB4',
        'desc' => 'SPI slave select; port B',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '(PCINT13/ICP3*/MOSI) PB5',
        'desc' => 'SPI master output/slave input; port B',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '(PCINT14/OC3A*/MISO) PB6',
        'desc' => 'SPI master input/slave output; port B',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '(PCINT15/OC3B*/SCK) PB7',
        'desc' => 'SPI master clock; port B',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '~RESET',
        'desc' => 'reset (active low)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'XTAL2',
        'desc' => 'clock oscillator pin 2',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'XTAL1',
        'desc' => 'clock oscillator pin 1',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '(PCINT24/RXD0) PD0',
        'desc' => 'port D',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '(PCINT25/TXD0) PD1',
        'desc' => 'port D',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => '(PCINT26/RXD1/INT0) PD2',
        'desc' => 'external interrupt 0; port D',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => '(PCINT27/TXD1/INT1) PD3',
        'desc' => 'external interrupt 1; port D',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => '(PCINT28/XCK1/OC1B) PD4',
        'desc' => 'port D',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => '(PCINT29/OC1A) PD5',
        'desc' => 'port D',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => '(PCINT30/OC2B/ICP) PD6',
        'desc' => 'port D',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'PD7 (OC2A/PCINT31)',
        'desc' => 'port D',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'PC0 (SCL/PCINT16)',
        'desc' => '2-wire clock line; port C',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'PC1 (SDA/PCINT17)',
        'desc' => '2-wire data line; port C',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'PC2 (TCK/PCINT18)',
        'desc' => 'JTAG test clock; port C',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'PC3 (TMS/PCINT19)',
        'desc' => 'JTAG test mode select; port C',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'PC4 (TDO/PCINT20)',
        'desc' => 'JTAG test data output; port C',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'PC5 (TDI/PCINT21)',
        'desc' => 'JTAG test data input; port C',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'PC6 (TOSC1/PCINT22)',
        'desc' => 'timer oscillator pin 1; port C',
      ),
      28 => 
      array (
        'num' => '29',
        'sym' => 'PC7 (TOSC2/PCINT23)',
        'desc' => 'timer oscillator pin 2; port C',
      ),
      29 => 
      array (
        'num' => '30',
        'sym' => 'AVcc',
        'desc' => 'A/D converter supply voltage',
      ),
      30 => 
      array (
        'num' => '31',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      31 => 
      array (
        'num' => '32',
        'sym' => 'AREF',
        'desc' => 'analog reference for A/D converter',
      ),
      32 => 
      array (
        'num' => '33',
        'sym' => 'PA7 (ADC7/PCINT7)',
        'desc' => 'port A',
      ),
      33 => 
      array (
        'num' => '34',
        'sym' => 'PA6 (ADC6/PCINT6)',
        'desc' => 'port A',
      ),
      34 => 
      array (
        'num' => '35',
        'sym' => 'PA5 (ADC5/PCINT5)',
        'desc' => 'port A',
      ),
      35 => 
      array (
        'num' => '36',
        'sym' => 'PA4 (ADC4/PCINT4)',
        'desc' => 'port A',
      ),
      36 => 
      array (
        'num' => '37',
        'sym' => 'PA3 (ADC3/PCINT3)',
        'desc' => 'port A',
      ),
      37 => 
      array (
        'num' => '38',
        'sym' => 'PA2 (ADC2/PCINT2)',
        'desc' => 'port A',
      ),
      38 => 
      array (
        'num' => '39',
        'sym' => 'PA1 (ADC1/PCINT1)',
        'desc' => 'port A',
      ),
      39 => 
      array (
        'num' => '40',
        'sym' => 'PA0 (ADC0/PCINT0)',
        'desc' => 'port A',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Flash memory',
        'val' => 
        array (
          0 => '16K (ATmega164P)',
          1 => '32K (ATmega324P)',
          2 => '64K (ATmega644P)',
          3 => '128K (ATmega1284P)',
        ),
        'unit' => 'bytes',
      ),
      1 => 
      array (
        'param' => 'Internal SRAM',
        'val' => 
        array (
          0 => '1K (ATmega164P)',
          1 => '2K (ATmega324P)',
          2 => '4K (ATmega644P)',
          3 => '16K (ATmega1284P)',
        ),
        'unit' => 'bytes',
      ),
      2 => 
      array (
        'param' => 'EEPROM',
        'val' => 
        array (
          0 => '512 (ATmega164P)',
          1 => '1K (ATmega324P)',
          2 => '2K (ATmega644P)',
          3 => '4K (ATmega1284P)',
        ),
        'unit' => 'bytes',
      ),
      3 => 
      array (
        'param' => 'Programmable I/O lines',
        'val' => '32',
      ),
    ),
    'notes' => 
    array (
      0 => 'ICP3, OC3A, OC3B present on ATmega1284P only',
    ),
  ),
  'ATMEGA8' => 
  array (
    'name' => 'ATmega8',
    'description' => '8-bit AVR® microcontroller',
    'package' => 'DIP',
    'pincount' => 28,
    'family' => 'Atmel',
    'datasheet' => 'http://www.atmel.com/dyn/resources/prod_documents/doc2486.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '(~RESET) PC6',
        'desc' => 'reset (active low); port C',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '(RXD) PD0',
        'desc' => 'UART receive; port D',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '(TXD) PD1',
        'desc' => 'UART transmit; port D',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '(INT0) PD2',
        'desc' => 'external interrupt 0; port D',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '(INT1) PD3',
        'desc' => 'external interrupt 1; port D',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '(XCK/T0) PD4',
        'desc' => 'port D',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '(XTAL1/TOSC1) PB6',
        'desc' => 'clock oscillator pin 1; port B',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '(XTAL2/TOSC2) PB7',
        'desc' => 'clock oscillator pin 2; port B',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '(T1) PD5',
        'desc' => 'port D',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '(AIN0) PD6',
        'desc' => 'port D',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '(AIN1) PD7',
        'desc' => 'port D',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '(ICP1) PB0',
        'desc' => 'port B',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'PB1 (OC1A)',
        'desc' => 'port B',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'PB2 (SS/OC1B)',
        'desc' => 'SPI slave select; port B',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'PB3 (MOSI/OC2)',
        'desc' => 'SPI master output/slave input; port B',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'PB4 (MISO)',
        'desc' => 'SPI master input/slave output; port B',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'PB5 (SCK)',
        'desc' => 'SPI master clock; port B',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'AVcc',
        'desc' => 'A/D converter supply voltage',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'AREF',
        'desc' => 'analog reference for A/D converter',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'PC0 (ADC0)',
        'desc' => 'port C',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'PC1 (ADC1)',
        'desc' => 'port C',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'PC2 (ADC2)',
        'desc' => 'port C',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'PC3 (ADC3)',
        'desc' => 'port C',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'PC4 (ADC4/SCL)',
        'desc' => '2-wire clock; port C',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'PC5 (ADC5/SDA)',
        'desc' => '2-wire data; port C',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Flash memory',
        'val' => '8K',
        'unit' => 'bytes',
      ),
      1 => 
      array (
        'param' => 'Internal SRAM',
        'val' => '1K',
        'unit' => 'bytes',
      ),
      2 => 
      array (
        'param' => 'EEPROM',
        'val' => '512',
        'unit' => 'bytes',
      ),
      3 => 
      array (
        'param' => 'Programmable I/O lines',
        'val' => '23',
      ),
      4 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => '16',
        'unit' => 'MHz',
      ),
    ),
  ),
  'ATTINY12' => 
  array (
    'name' => 'ATTiny12',
    'description' => '8-Bit AVR® microcontroller with 1 kb In-system programmable flash memory',
    'aliases' => 
    array (
      0 => 'ATTiny12V-1',
      1 => 'ATTiny12L-4',
      2 => 'ATTiny12-8',
    ),
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'atmel',
    'datasheet' => 'http://www.atmel.com/dyn/resources/prod_documents/doc1006.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'PB5 / ~RESET~',
        'desc' => 'PB5 / chip reset (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'PB3 / XTAL1',
        'desc' => 'PB3 / Inverting oscillator amplifier input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'PB4 / XTAL2',
        'desc' => 'PB4 / Inverting oscillator amplifier output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'GND',
        'desc' => 'Ground',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'PB0 / AIN0 / MOSI',
        'desc' => 'PB0 / Analog comparator positive input / Serial programming input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'PB1 / INT0 / AIN1 / MISO',
        'desc' => 'PB1 / External interrupt 0 / Analog comparator negative input / Serial programming input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'PB2 / T0 / SCK',
        'desc' => 'PB2 / Timer/Counter 0 external counter input / Serial clock',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'V__CC',
        'desc' => 'Supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Flash program memory',
        'val' => '1',
        'unit' => 'kb',
      ),
      1 => 
      array (
        'param' => 'EEPROM memory',
        'val' => '64',
        'unit' => 'bytes',
      ),
      2 => 
      array (
        'param' => 'Operating voltage',
        'val' => 
        array (
          0 => '1.8-5.5 (ATTiny12V-1)',
          1 => '2.7-5.5 (ATTiny12L-4)',
          2 => '4.0-5.5 (ATTiny12-8)',
        ),
        'unit' => 'V',
      ),
      3 => 
      array (
        'param' => 'Speed grade',
        'val' => 
        array (
          0 => '0-1.2 (ATTiny12V-1)',
          1 => '0-4 (ATTiny12L-4)',
          2 => '0-8 (ATTiny12-8)',
        ),
        'unit' => 'MHz',
      ),
      4 => 
      array (
        'param' => 'Active power consumption (at 4 MHz, 3V)',
        'val' => '2.2',
        'unit' => 'mA',
      ),
      5 => 
      array (
        'param' => 'Idle mode power consumption (at 4 MHz, 3V)',
        'val' => '0.5',
        'unit' => 'mA',
      ),
      6 => 
      array (
        'param' => 'Power-down mode power consumption (at 4 MHz, 3V)',
        'val' => '< 1',
        'unit' => 'µA',
      ),
    ),
    'notes' => 
    array (
      0 => 'Also availablle in SOIC package (same pinout)',
    ),
  ),
  'ATTINY13' => 
  array (
    'name' => 'ATtiny13',
    'description' => '8-bit AVR® microcontroller',
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'Atmel',
    'datasheet' => 'http://www.atmel.com/dyn/resources/prod_documents/doc2535.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '(PCINT5/~RESET~/ADC0/dW) PB5',
        'desc' => 'reset (active low); port B',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '(PCINT3/CLKI/ADC3) PB3',
        'desc' => 'external clock input; port B',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '(PCINT4/ADC2) PB4',
        'desc' => 'port B',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'PB0 (MOSI/AIN0/OC0A/PCINT0)',
        'desc' => 'SPI master output/slave input; port B',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'PB1 (MISO/AIN1/OC0B/INT0/PCINT1)',
        'desc' => 'SPI master input/slave output; port B',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'PB2 (SCK/ADC1/T0/PCINT2)',
        'desc' => 'SPI master clock; port B',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Flash memory',
        'val' => '1K',
        'unit' => 'bytes',
      ),
      1 => 
      array (
        'param' => 'Internal SRAM',
        'val' => '64',
        'unit' => 'bytes',
      ),
      2 => 
      array (
        'param' => 'EEPROM',
        'val' => '64',
        'unit' => 'bytes',
      ),
      3 => 
      array (
        'param' => 'Programmable I/O lines',
        'val' => '6',
      ),
      4 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => '10',
        'unit' => 'MHz',
      ),
    ),
  ),
  'ATTINY2313' => 
  array (
    'name' => 'ATtiny2313',
    'description' => '8-bit AVR® microcontroller',
    'aliases' => 
    array (
      0 => 'ATtiny4313',
    ),
    'package' => 'DIP',
    'pincount' => 20,
    'family' => 'Atmel',
    'datasheet' => 'http://www.atmel.com/dyn/resources/prod_documents/DOC8246.PDF',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '(~RESET~/dW) PA2',
        'desc' => 'reset (active low)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '(RXD) PD0',
        'desc' => 'UART receive; port D',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '(TXD) PD1',
        'desc' => 'UART transmit; port D',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '(XTAL2) PA1',
        'desc' => 'clock oscillator pin 2; port A',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '(XTAL1) PA0',
        'desc' => 'clock oscillator pin 1; port A',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '(CKOUT/XCK/INT0) PD2',
        'desc' => 'external interrupt 0; clock output; port D',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '(INT1) PD3',
        'desc' => 'external interrupt 1; port D',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '(T0) PD4',
        'desc' => 'port D',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '(OC0B/T1) PD5',
        'desc' => 'port D',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'PD6 (ICP)',
        'desc' => 'port D',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'PB0 (AIN0/PCINT0)',
        'desc' => 'port B',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'PB1 (AIN1/PCINT1)',
        'desc' => 'port B',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'PB2 (OC0A/PCINT2)',
        'desc' => 'port B',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'PB3 (OC1A/PCINT3)',
        'desc' => 'port B',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'PB4 (OC1B/PCINT4)',
        'desc' => 'port B',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'PB5 (MOSI/DI/SDA/PCINT5)',
        'desc' => '3-wire data input; 2-wire data; port B',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'PB6 (MISO/DO/PCINT6)',
        'desc' => '3-wire data output; port B',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'PB7 (UCSK/SCL/PCINT7)',
        'desc' => '3-wire clock; 2-wire clock; port B',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Flash memory',
        'val' => 
        array (
          0 => '2K (ATtiny2313)',
          1 => '4K (ATtiny4313)',
        ),
        'unit' => 'bytes',
      ),
      1 => 
      array (
        'param' => 'Internal SRAM',
        'val' => 
        array (
          0 => '128 (ATtiny2313)',
          1 => '256 (ATtiny4313)',
        ),
        'unit' => 'bytes',
      ),
      2 => 
      array (
        'param' => 'EEPROM',
        'val' => 
        array (
          0 => '128 (ATtiny2313)',
          1 => '256 (ATtiny4313)',
        ),
        'unit' => 'bytes',
      ),
      3 => 
      array (
        'param' => 'Programmable I/O lines',
        'val' => '18',
      ),
      4 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => '20',
        'unit' => 'MHz',
      ),
    ),
  ),
  'ATTINY85' => 
  array (
    'name' => 'ATtiny85',
    'description' => '8-bit AVR® microcontroller',
    'aliases' => 
    array (
      0 => 'ATtiny25',
      1 => 'ATtiny45',
    ),
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'Atmel',
    'datasheet' => 'http://www.atmel.com/dyn/resources/prod_documents/doc2586.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '(PCINT5/~RESET~/ADC0/dW) PB5',
        'desc' => 'reset (active low); port B',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '(PCINT3/XTAL1/CLKI/~OC1B~/ADC3) PB3',
        'desc' => 'crystal connection; external clock input; port B',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '(PCINT4/XTAL2/CLKO/OC1B/ADC2) PB4',
        'desc' => 'crystal connection; clock output; port B',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'PB0 (MOSI/DI/SDA/AIN0/OC0A/~OC1A~/AREF/PCINT0)',
        'desc' => 'SPI master output/slave input; 2-wire data; ADC reference; port B',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'PB1 (MISO/DO/AIN1/OC0B/OC1A/PCINT1)',
        'desc' => 'SPI master input/slave output; port B',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'PB2 (SCK/USCK/SCL/ADC1/T0/INT0/PCINT2)',
        'desc' => 'SPI master clock; 2-wire clock; external interrupt 0; port B',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Flash memory',
        'val' => 
        array (
          0 => '2K (ATtiny25)',
          1 => '4K (ATtiny45)',
          2 => '8K (ATtiny85)',
        ),
        'unit' => 'bytes',
      ),
      1 => 
      array (
        'param' => 'Internal SRAM',
        'val' => 
        array (
          0 => '128 (ATtiny25)',
          1 => '256 (ATtiny45)',
          2 => '512 (ATtiny85)',
        ),
        'unit' => 'bytes',
      ),
      2 => 
      array (
        'param' => 'EEPROM',
        'val' => 
        array (
          0 => '128 (ATtiny25)',
          1 => '256 (ATtiny45)',
          2 => '512 (ATtiny85)',
        ),
        'unit' => 'bytes',
      ),
      3 => 
      array (
        'param' => 'Programmable I/O lines',
        'val' => '6',
      ),
      4 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => '20',
        'unit' => 'MHz',
      ),
    ),
  ),
  'AY-3-8910' => 
  array (
    'description' => 'Programmable sound generator',
    'aliases' => 
    array (
      0 => 'YM2149',
    ),
    'package' => 'DIP',
    'pincount' => 40,
    'family' => 'General Instrument',
    'datasheet' => 'http://www.ym2149.com/ay8910.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'ANALOG B',
        'desc' => 'analog output, channel B',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'ANALOG A',
        'desc' => 'analog output, channel A',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'IOB7',
        'desc' => 'I/O port B',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'IOB6',
        'desc' => 'I/O port B',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'IOB5',
        'desc' => 'I/O port B',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'IOB4',
        'desc' => 'I/O port B',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'IOB3',
        'desc' => 'I/O port B',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'IOB2',
        'desc' => 'I/O port B',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'IOB1',
        'desc' => 'I/O port B',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'IOB0',
        'desc' => 'I/O port B',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'IOA7',
        'desc' => 'I/O port A',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'IOA6',
        'desc' => 'I/O port A',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'IOA5',
        'desc' => 'I/O port A',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'IOA4',
        'desc' => 'I/O port A',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'IOA3',
        'desc' => 'I/O port A',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'IOA2',
        'desc' => 'I/O port A',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'IOA1',
        'desc' => 'I/O port A',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'IOA0',
        'desc' => 'I/O port A',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'CLOCK',
        'desc' => 'clock input',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => '~RESET',
        'desc' => 'master reset (active low)',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => '~A9',
        'desc' => 'chip select',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'A8',
        'desc' => 'chip select',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'TEST 2/~SEL',
        'desc' => 'test pin (do not connect)',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'BDIR',
        'desc' => 'bus direction',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'BC2',
        'desc' => 'bus control',
      ),
      28 => 
      array (
        'num' => '29',
        'sym' => 'BC1',
        'desc' => 'bus control',
      ),
      29 => 
      array (
        'num' => '30',
        'sym' => 'DA7',
        'desc' => 'data/address bus',
      ),
      30 => 
      array (
        'num' => '31',
        'sym' => 'DA6',
        'desc' => 'data/address bus',
      ),
      31 => 
      array (
        'num' => '32',
        'sym' => 'DA5',
        'desc' => 'data/address bus',
      ),
      32 => 
      array (
        'num' => '33',
        'sym' => 'DA4',
        'desc' => 'data/address bus',
      ),
      33 => 
      array (
        'num' => '34',
        'sym' => 'DA3',
        'desc' => 'data/address bus',
      ),
      34 => 
      array (
        'num' => '35',
        'sym' => 'DA2',
        'desc' => 'data/address bus',
      ),
      35 => 
      array (
        'num' => '36',
        'sym' => 'DA1',
        'desc' => 'data/address bus',
      ),
      36 => 
      array (
        'num' => '37',
        'sym' => 'DA0',
        'desc' => 'data/address bus',
      ),
      37 => 
      array (
        'num' => '38',
        'sym' => 'ANALOG C',
        'desc' => 'analog output, channel C',
      ),
      38 => 
      array (
        'num' => '39',
        'sym' => 'TEST 1',
        'desc' => 'test pin (do not connect)',
      ),
      39 => 
      array (
        'num' => '40',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Minimum clock frequency',
        'val' => '1',
        'unit' => 'MHz',
      ),
      1 => 
      array (
        'param' => 'Maximum clock frequency',
        'val' => 
        array (
          0 => '2.5 (AY-3-8910)',
          1 => '4 (YM2149)',
        ),
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'Chip is only active when ~A9 is low, A8 is high, and address bits DA7-DA4 are low.',
      1 => 'Address bits DA3-DA0 select one of the 16 control registers.',
      2 => 'For YM2149, connecting pin 26 to ground divides CLOCK by 2.',
      3 => 'BDIR=0, BC2=0, BC1=0: inactive, DA7-DA0 high impedance',
      4 => 'BDIR=0, BC2=0, BC1=1: latch address, DA7-DA0 are inputs',
      5 => 'BDIR=0, BC2=1, BC1=0: inactive, DA7-DA0 high impedance',
      6 => 'BDIR=0, BC2=1, BC1=1: read, DA7-DA0 are outputs',
      7 => 'BDIR=1, BC2=0, BC1=0: latch address, DA7-DA0 are inputs',
      8 => 'BDIR=1, BC2=0, BC1=1: inactive, DA7-DA0 high impedance',
      9 => 'BDIR=1, BC2=1, BC1=0: write, DA7-DA0 are inputs',
      10 => 'BDIR=1, BC2=1, BC1=1: latch address, DA7-DA0 are inputs',
      11 => 'Control registers:
<table>
<tr><td>$00</td><td>tone generator A frequency, low 8 bits</td></tr>
<tr><td>$01</td><td>tone generator A frequency, high 4 bits</td></tr>
<tr><td>$02</td><td>tone generator B frequency, low 8 bits</td></tr>
<tr><td>$03</td><td>tone generator B frequency, high 4 bits</td></tr>
<tr><td>$04</td><td>tone generator C frequency, low 8 bits</td></tr>
<tr><td>$05</td><td>tone generator C frequency, high 4 bits</td></tr>
<tr><td>$06</td><td>noise generator frequency, low 5 bits</td></tr>
<tr><td>$07</td><td>I/O port and mixer control</td></tr>
<tr><td>$08</td><td>channel A amplitude/envelope enable</td></tr>
<tr><td>$09</td><td>channel B amplitude/envelope enable</td></tr>
<tr><td>$0A</td><td>channel C amplitude/envelope enable</td></tr>
<tr><td>$0B</td><td>envelope frequency, low 8 bits</td></tr>
<tr><td>$0C</td><td>envelope frequency, high 8 bits</td></tr>
<tr><td>$0D</td><td>envelope shape</td></tr>
<tr><td>$0E</td><td>I/O port A data</td></tr>
<tr><td>$0F</td><td>I/O port B data</td></tr>
</table>',
    ),
  ),
  'DS1307' => 
  array (
    'description' => '64 x 8, serial, I2C real-time clock',
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'Maxim',
    'datasheet' => 'http://datasheets.maxim-ic.com/en/ds/DS1307.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'X1',
        'desc' => '32.768kHz crystal connection',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'X2',
        'desc' => '32.768kHz crystal connection',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'V__BAT',
        'desc' => 'backup supply voltage (e.g. 3V lithium coin cell)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'SDA',
        'desc' => 'serial data input/output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'SCL',
        'desc' => 'serial clock input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'SQW/OUT',
        'desc' => 'square wave output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'Vcc',
        'desc' => 'primary supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'A lithium battery with 48 mAh or greater will back up the DS1307 for more than 10 years.',
      1 => 'Square wave output can be 1Hz, 4.096kHz, 8.192kHz, or 32.768kHz.',
      2 => 'Reads/writes are inhibited when Vcc falls below 1.25 x V__BAT.',
    ),
  ),
  'DS1620' => 
  array (
    'description' => 'Digital Thermometer and Thermostat',
    'aliases' => 
    array (
    ),
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'Maxim',
    'datasheet' => 'http://datasheets.maxim-ic.com/en/ds/DS1620.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'DQ',
        'desc' => '3-Wire input/output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'CLK/~CONV~',
        'desc' => '3-Wire clock input & stand-alone convert input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '~RST~',
        'desc' => 'reset',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'GND',
        'desc' => 'power ground',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'T__COM',
        'desc' => 'Hi/Lo combined trigger',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'T__LOW',
        'desc' => 'low Temp trigger',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'T__HIGH',
        'desc' => 'high Temp trigger',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'V__DD',
        'desc' => '+3V to +5V',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Data resolution',
        'val' => '9',
        'unit' => 'Bits',
      ),
      1 => 
      array (
        'param' => 'Measurement range',
        'val' => '-55 to +125',
        'unit' => 'Deg C',
      ),
      2 => 
      array (
        'param' => 'Supply Voltage',
        'val' => '3 - 5',
        'unit' => 'Volts',
      ),
    ),
    'notes' => 
    array (
      0 => 'Temperature excursions beyond user defined Max / Min limits will trigger T__HIGH or T__LOW outputs for application driven temperature correction.',
    ),
  ),
  'DS32KHZ' => 
  array (
    'name' => 'DS32kHz',
    'description' => '32.768kHz temperature-compensated crystal oscillator',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => 'Maxim',
    'datasheet' => 'http://datasheets.maxim-ic.com/en/ds/DS32kHz.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '',
        'desc' => 'no pin',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '',
        'desc' => 'no pin',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'V__BAT',
        'desc' => '+3V nominal backup supply voltage',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '32kHz',
        'desc' => '32.768kHz push-pull output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'Vcc',
        'desc' => 'primary supply voltage',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Frequency stability, 0°C to +40°C',
        'val' => '±2.0',
        'unit' => 'ppm',
      ),
      1 => 
      array (
        'param' => 'Frequency stability, -40°C to +85°C',
        'val' => '±7.5',
        'unit' => 'ppm',
      ),
    ),
  ),
  'HSN-1000' => 
  array (
    'description' => 'Nuclear event detector',
    'aliases' => 
    array (
    ),
    'package' => 'DIP',
    'pincount' => 14,
    'family' => 'Maxwell',
    'datasheet' => 'http://www.maxwell.com/products/microelectronics/docs/HSN1000_REV3.PDF',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'V__L',
        'desc' => 'load voltage',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '~NED',
        'desc' => 'nuclear event detection (active low)',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'CAP1',
        'desc' => 'external capacitor',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'CAP2',
        'desc' => 'external capacitor',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'BIT',
        'desc' => 'built-in test',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'package ground and case',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'V__B',
        'desc' => 'pin diode bias',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'THR_ADJ',
        'desc' => 'threshold adjust',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'V__H',
        'desc' => 'hardened supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Hardened supply voltage',
        'val' => 
        array (
          0 => '4.5 (min)',
          1 => '5.5 (max)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Radiation propagation delay time',
        'val' => '20',
        'unit' => 'ns',
      ),
      2 => 
      array (
        'param' => 'Dose rate (operate-through)',
        'val' => '1 × 10<sup>12</sup>',
        'unit' => 'rad(Si)/s',
      ),
      3 => 
      array (
        'param' => 'Total dose',
        'val' => '1 × 10<sup>6</sup>',
        'unit' => 'rad(Si)',
      ),
      4 => 
      array (
        'param' => 'Neutron fluence',
        'val' => '5 × 10<sup>13</sup>',
        'unit' => 'n/cm<sup>2</sup>',
      ),
      5 => 
      array (
        'param' => 'Approximate detection range',
        'val' => 
        array (
          0 => '2 × 10<sup>5</sup> (min)',
          1 => '2 × 10<sup>7</sup> (max)',
        ),
        'unit' => 'rad(Si)/s',
      ),
    ),
    'notes' => 
    array (
      0 => 'Less than a 30% variation in detection threshold can be expected over the entire operating temperature range.',
    ),
  ),
  'ICL7660' => 
  array (
    'description' => 'Switched-capacitor voltage converter',
    'aliases' => 
    array (
      0 => 'MAX1044',
    ),
    'package' => 'DIP',
    'pincount' => 8,
    'datasheet' => 'http://www.intersil.com/data/fn/fn3072.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'CAP+',
        'desc' => 'connection to + terminal of charge-pump capacitor',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'CAP-',
        'desc' => 'connection to - terminal of charge-pump capacitor',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'V__OUT',
        'desc' => 'negative voltage output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'LV',
        'desc' => 'low voltage; connect to ground for V+ < 3.5V',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'OSC',
        'desc' => 'oscillator control input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'V+',
        'desc' => 'positive supply voltage (1.5V to 10V)',
      ),
    ),
    'notes' => 
    array (
      0 => 'Basic negative voltage converter: 10µF capacitor across pins 2 and 4; 10µF capacitor across pin 5 (negative lead) and ground (positive lead).',
    ),
  ),
  'ICM7228B' => 
  array (
    'description' => '8-digit LED display decoder/driver, common cathode',
    'package' => 'DIP',
    'pincount' => 28,
    'family' => 'Intersil',
    'datasheet' => 'http://www.intersil.com/data/fn/fn3160.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'DIGIT 4',
        'desc' => 'digit 4 cathode',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'DIGIT 6',
        'desc' => 'digit 6 cathode',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'DIGIT 3',
        'desc' => 'digit 3 cathode',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'DIGIT 1',
        'desc' => 'digit 1 cathode',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'ID6',
        'desc' => 'data bit 6 (HEXA/~CODE-B~)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'ID5',
        'desc' => 'data bit 5 (~DECODE~)',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'ID7',
        'desc' => 'data bit 7 (DATA COMING)',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '~WRITE',
        'desc' => 'write (active low, low-to-high edge triggered)',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'MODE',
        'desc' => 'mode select (control or data word)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'ID4',
        'desc' => 'data bit 4 (~SHUTDOWN~)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'ID1',
        'desc' => 'data bit 1',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'ID0',
        'desc' => 'data bit 0',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'ID2',
        'desc' => 'data bit 2',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'ID3',
        'desc' => 'data bit 3',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'DP',
        'desc' => 'decimal point anode',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'SEG a',
        'desc' => 'segment a anode',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'SEG b',
        'desc' => 'segment b anode',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'SEG d',
        'desc' => 'segment d anode',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'SEG c',
        'desc' => 'segment c anode',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'SEG e',
        'desc' => 'segment e anode',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'SEG f',
        'desc' => 'segment f anode',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'SEG g',
        'desc' => 'segment g anode',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'DIGIT 8',
        'desc' => 'digit 8 cathode',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'DIGIT 2',
        'desc' => 'digit 2 cathode',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'DIGIT 5',
        'desc' => 'digit 5 cathode',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'DIGIT 7',
        'desc' => 'digit 7 cathode',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Display scan rate',
        'val' => '390',
        'unit' => 'Hz',
      ),
      1 => 
      array (
        'param' => 'Inter-digit blanking time',
        'val' => '10',
        'unit' => 'µs',
      ),
      2 => 
      array (
        'param' => 'Write pulse width',
        'val' => 
        array (
          0 => '100 (low)',
          1 => '540 (high)',
        ),
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Mode setup time',
        'val' => '150',
        'unit' => 'ns',
      ),
      4 => 
      array (
        'param' => 'Data setup time',
        'val' => '160',
        'unit' => 'ns',
      ),
      5 => 
      array (
        'param' => 'Minimum digit drive capability',
        'val' => '50',
        'unit' => 'mA',
      ),
      6 => 
      array (
        'param' => 'Segment driver output impedance',
        'val' => '100',
        'unit' => 'Ω',
      ),
      7 => 
      array (
        'param' => 'Peak current drive per segment',
        'val' => '10',
        'unit' => 'mA',
      ),
    ),
    'notes' => 
    array (
      0 => 'When MODE is low, data is loaded into display RAM. When MODE is high, data is loaded into control register.',
    ),
  ),
  'LF347' => 
  array (
    'description' => 'Wide bandwidth quad JFET-input operational amplifier',
    'aliases' => 
    array (
      0 => 'LF147',
    ),
    'package' => 'DIP',
    'pincount' => 14,
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LF/LF147.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1OUT',
        'desc' => 'output 1',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1IN-',
        'desc' => 'inverting input 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1IN+',
        'desc' => 'non-inverting input 1',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Vcc',
        'desc' => 'positive supply voltage',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2IN+',
        'desc' => 'non-inverting input 2',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2IN-',
        'desc' => 'inverting input 2',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2OUT',
        'desc' => 'output 2',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3OUT',
        'desc' => 'output 3',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3IN-',
        'desc' => 'inverting input 3',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3IN+',
        'desc' => 'non-inverting input 3',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'Vss',
        'desc' => 'negative supply voltage',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4IN+',
        'desc' => 'non-inverting input 4',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4IN-',
        'desc' => 'inverting input 4',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '4OUT',
        'desc' => 'output 4',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Supply voltage',
        'val' => 
        array (
          0 => '8 (min)',
          1 => '36 (max)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Maximum offset voltage',
        'val' => '5',
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Gain bandwidth',
        'val' => '4',
        'unit' => 'MHz',
      ),
      3 => 
      array (
        'param' => 'Slew rate',
        'val' => '13',
        'unit' => 'V/µs',
      ),
      4 => 
      array (
        'param' => 'Voltage noise',
        'val' => '20',
        'unit' => 'nV/√Hz',
      ),
      5 => 
      array (
        'param' => 'Supply current (per channel)',
        'val' => '1.8',
        'unit' => 'mA',
      ),
    ),
  ),
  'LF353' => 
  array (
    'description' => 'Wide bandwidth dual JFET-input operational amplifier',
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LF/LF353.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1OUT',
        'desc' => 'output 1',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1IN-',
        'desc' => 'inverting input 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1IN+',
        'desc' => 'non-inverting input 1',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Vss',
        'desc' => 'negative supply voltage',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2IN+',
        'desc' => 'non-inverting input 2',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2IN-',
        'desc' => 'inverting input 2',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2OUT',
        'desc' => 'output 2',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'Vcc',
        'desc' => 'positive supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Supply voltage',
        'val' => 
        array (
          0 => '10 (min)',
          1 => '36 (max)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Offset voltage',
        'val' => '10',
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Gain bandwidth',
        'val' => '4',
        'unit' => 'MHz',
      ),
      3 => 
      array (
        'param' => 'Slew rate',
        'val' => '13',
        'unit' => 'V/µs',
      ),
      4 => 
      array (
        'param' => 'Settling time to 0.01%',
        'val' => '2',
        'unit' => 'µs',
      ),
      5 => 
      array (
        'param' => 'Voltage noise',
        'val' => '25',
        'unit' => 'nV/√Hz',
      ),
      6 => 
      array (
        'param' => 'Supply current (per channel)',
        'val' => '1.8',
        'unit' => 'mA',
      ),
    ),
  ),
  'LF411' => 
  array (
    'description' => 'Low-offset, low-drift JFET-input operational amplifier',
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LF/LF411.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'BAL',
        'desc' => 'balance',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'IN-',
        'desc' => 'inverting input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'IN+',
        'desc' => 'non-inverting input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Vss',
        'desc' => 'negative supply voltage',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'BAL',
        'desc' => 'balance',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'OUT',
        'desc' => 'output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Vcc',
        'desc' => 'positive supply voltage',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '±18',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Offset voltage',
        'val' => '0.5',
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Gain bandwidth',
        'val' => '4',
        'unit' => 'MHz',
      ),
      3 => 
      array (
        'param' => 'Slew rate',
        'val' => '15',
        'unit' => 'V/µs',
      ),
      4 => 
      array (
        'param' => 'Voltage noise',
        'val' => '25',
        'unit' => 'nV/√Hz',
      ),
      5 => 
      array (
        'param' => 'Supply current',
        'val' => '1.8',
        'unit' => 'mA',
      ),
    ),
  ),
  'LF412' => 
  array (
    'description' => 'Low-offset, low-drift dual JFET-input operational amplifier',
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LF/LF412.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1OUT',
        'desc' => 'output 1',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1IN-',
        'desc' => 'inverting input 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1IN+',
        'desc' => 'non-inverting input 1',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Vss',
        'desc' => 'negative supply voltage',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2IN+',
        'desc' => 'non-inverting input 2',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2IN-',
        'desc' => 'inverting input 2',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2OUT',
        'desc' => 'output 2',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'Vcc',
        'desc' => 'positive supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '±18',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Offset voltage',
        'val' => '1',
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Gain bandwidth',
        'val' => '4',
        'unit' => 'MHz',
      ),
      3 => 
      array (
        'param' => 'Slew rate',
        'val' => '15',
        'unit' => 'V/µs',
      ),
      4 => 
      array (
        'param' => 'Voltage noise',
        'val' => '25',
        'unit' => 'nV/√Hz',
      ),
      5 => 
      array (
        'param' => 'Supply current (per channel)',
        'val' => '1.8',
        'unit' => 'mA',
      ),
    ),
  ),
  'LF444' => 
  array (
    'description' => 'Quad low-power JFET-input operational amplifier',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LF/LF444.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1OUT',
        'desc' => 'output 1',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1IN-',
        'desc' => 'inverting input 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1IN+',
        'desc' => 'non-inverting input 1',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Vcc',
        'desc' => 'positive supply voltage',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2IN+',
        'desc' => 'non-inverting input 2',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2IN-',
        'desc' => 'inverting input 2',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2OUT',
        'desc' => 'output 2',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3OUT',
        'desc' => 'output 3',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3IN-',
        'desc' => 'inverting input 3',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3IN+',
        'desc' => 'non-inverting input 3',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'Vss',
        'desc' => 'negative supply voltage',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4IN+',
        'desc' => 'non-inverting input 4',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4IN-',
        'desc' => 'inverting input 4',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '4OUT',
        'desc' => 'output 4',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '±18',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Offset voltage',
        'val' => '2',
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Gain bandwidth',
        'val' => '1',
        'unit' => 'MHz',
      ),
      3 => 
      array (
        'param' => 'Slew rate',
        'val' => '1',
        'unit' => 'V/µs',
      ),
      4 => 
      array (
        'param' => 'Voltage noise',
        'val' => '35',
        'unit' => 'nV/√Hz',
      ),
      5 => 
      array (
        'param' => 'Supply current (per channel)',
        'val' => '0.15',
        'unit' => 'mA',
      ),
    ),
  ),
  'LM301A' => 
  array (
    'description' => 'Operational amplifier',
    'aliases' => 
    array (
      0 => 'LM101A',
      1 => 'LM201A',
    ),
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM101A.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'BAL/COMP',
        'desc' => 'balance/compensation',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'IN-',
        'desc' => 'inverting input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'IN+',
        'desc' => 'non-inverting input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Vss',
        'desc' => 'negative supply voltage',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'BAL',
        'desc' => 'balance',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'OUT',
        'desc' => 'output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'Vcc',
        'desc' => 'positive supply voltage',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'COMP',
        'desc' => 'compensation',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => 
        array (
          0 => '±22 (LM101A/201A)',
          1 => '±18 (LM301A)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Minimum supply voltage',
        'val' => '10',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Input offset voltage',
        'val' => 
        array (
          0 => '0.7 (LM101A/201A)',
          1 => '2 (LM301A)',
        ),
        'unit' => 'mV',
      ),
      3 => 
      array (
        'param' => 'Gain bandwidth',
        'val' => '1',
        'unit' => 'MHz',
      ),
      4 => 
      array (
        'param' => 'Slew rate',
        'val' => '0.5',
        'unit' => 'V/µs',
      ),
      5 => 
      array (
        'param' => 'Voltage noise',
        'val' => '15',
        'unit' => 'nV/√Hz',
      ),
      6 => 
      array (
        'param' => 'Supply current',
        'val' => '1.8',
        'unit' => 'mA',
      ),
    ),
  ),
  'LM311' => 
  array (
    'description' => 'Voltage comparator',
    'aliases' => 
    array (
      0 => 'LM111',
    ),
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM111.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'IN+',
        'desc' => 'non-inverting input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'IN-',
        'desc' => 'inverting input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Vss',
        'desc' => 'negative supply voltage',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'BAL',
        'desc' => 'balance',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'BAL/STROBE',
        'desc' => 'balance/strobe',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'OUT',
        'desc' => 'output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'Vcc',
        'desc' => 'positive supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '36',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Offset voltage',
        'val' => 
        array (
          0 => '3 (LM111)',
          1 => '7.5 (LM311)',
        ),
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Response time',
        'val' => '200',
        'unit' => 'ns',
      ),
      3 => 
      array (
        'param' => 'Supply current',
        'val' => '5.1',
        'unit' => 'mA',
      ),
    ),
  ),
  'LM319' => 
  array (
    'description' => 'High speed dual comparator',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM319.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'GND 1',
        'desc' => 'ground 1',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '+INPUT 1',
        'desc' => 'non-inverting input 1',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '-INPUT 1',
        'desc' => 'inverting input 1',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'V-',
        'desc' => 'negative supply voltage',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'OUTPUT 2',
        'desc' => 'output 2',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND 2',
        'desc' => 'ground 2',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '+INPUT 2',
        'desc' => 'non-inverting input 2',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '-INPUT 2',
        'desc' => 'inverting input 2',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'V+',
        'desc' => 'positive supply voltage',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'OUTPUT 1',
        'desc' => 'output 1',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'NC',
        'desc' => 'not connected',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'NC',
        'desc' => 'not connected',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '36',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Maximum input voltage',
        'val' => '±15',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Input offset voltage',
        'val' => '2',
        'unit' => 'mV',
      ),
      3 => 
      array (
        'param' => 'Voltage gain',
        'val' => '40',
        'unit' => 'V/mV',
      ),
      4 => 
      array (
        'param' => 'Response time',
        'val' => '80',
        'unit' => 'ns',
      ),
    ),
  ),
  'LM324' => 
  array (
    'description' => 'Low power quad operational amplifier',
    'aliases' => 
    array (
      0 => 'LM124',
      1 => 'LM224',
    ),
    'package' => 'DIP',
    'pincount' => 14,
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM124.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1OUT',
        'desc' => 'output 1',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1IN-',
        'desc' => 'inverting input 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1IN+',
        'desc' => 'non-inverting input 1',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Vcc',
        'desc' => 'positive supply voltage',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2IN+',
        'desc' => 'non-inverting input 2',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2IN-',
        'desc' => 'inverting input 2',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2OUT',
        'desc' => 'output 2',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3OUT',
        'desc' => 'output 3',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3IN-',
        'desc' => 'inverting input 3',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3IN+',
        'desc' => 'non-inverting input 3',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'GND',
        'desc' => 'ground/negative supply voltage',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4IN+',
        'desc' => 'non-inverting input 4',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4IN-',
        'desc' => 'inverting input 4',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '4OUT',
        'desc' => 'output 4',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '32',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Minimum supply voltage',
        'val' => '3',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Offset voltage',
        'val' => '2',
        'unit' => 'mV',
      ),
      3 => 
      array (
        'param' => 'Gain bandwidth',
        'val' => '1',
        'unit' => 'MHz',
      ),
      4 => 
      array (
        'param' => 'Slew rate',
        'val' => '0.5',
        'unit' => 'V/µs',
      ),
      5 => 
      array (
        'param' => 'Voltage noise',
        'val' => '40',
        'unit' => 'nV/√Hz',
      ),
      6 => 
      array (
        'param' => 'Supply current (per channel)',
        'val' => '0.18',
        'unit' => 'mA',
      ),
    ),
  ),
  'LM339' => 
  array (
    'description' => 'Low-power, low-offset quad comparator',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM139.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'OUTPUT 2',
        'desc' => 'output 2',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'OUTPUT 1',
        'desc' => 'output 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'V+',
        'desc' => 'positive supply voltage',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '-INPUT 1',
        'desc' => 'inverting input 1',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '+INPUT 1',
        'desc' => 'non-inverting input 1',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '-INPUT 2',
        'desc' => 'inverting input 2',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '+INPUT 2',
        'desc' => 'non-inverting input 2',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '-INPUT 3',
        'desc' => 'inverting input 3',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '+INPUT 3',
        'desc' => 'non-inverting input 3',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '-INPUT 4',
        'desc' => 'inverting input 4',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '+INPUT 4',
        'desc' => 'non-inverting input 4',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'OUTPUT 4',
        'desc' => 'output 4',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'OUTPUT 3',
        'desc' => 'output 3',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '36 or ±18',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Maximum input voltage',
        'val' => '36',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Offset voltage',
        'val' => '±3',
        'unit' => 'V',
      ),
      3 => 
      array (
        'param' => 'Voltage gain',
        'val' => '200',
        'unit' => 'V/mV',
      ),
      4 => 
      array (
        'param' => 'Large signal response time',
        'val' => '300',
        'unit' => 'ns',
      ),
      5 => 
      array (
        'param' => 'Response time',
        'val' => '1.3',
        'unit' => 'µs',
      ),
    ),
  ),
  'LM348' => 
  array (
    'description' => 'Quad 741 operational amplifier',
    'aliases' => 
    array (
      0 => 'LM148',
      1 => 'LM248',
    ),
    'package' => 'DIP',
    'pincount' => 14,
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM148.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1OUT',
        'desc' => 'output 1',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1IN-',
        'desc' => 'inverting input 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1IN+',
        'desc' => 'non-inverting input 1',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'Vcc',
        'desc' => 'positive supply voltage',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2IN+',
        'desc' => 'non-inverting input 2',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2IN-',
        'desc' => 'inverting input 2',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2OUT',
        'desc' => 'output 2',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3OUT',
        'desc' => 'output 3',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3IN-',
        'desc' => 'inverting input 3',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3IN+',
        'desc' => 'non-inverting input 3',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'Vss',
        'desc' => 'negative supply voltage',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4IN+',
        'desc' => 'non-inverting input 4',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4IN-',
        'desc' => 'inverting input 4',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '4OUT',
        'desc' => 'output 4',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => 
        array (
          0 => '±22 (LM148)',
          1 => '±18 (LM248/348)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Offset voltage',
        'val' => '1',
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Gain bandwidth',
        'val' => '1',
        'unit' => 'MHz',
      ),
      3 => 
      array (
        'param' => 'Slew rate',
        'val' => '0.5',
        'unit' => 'V/µs',
      ),
      4 => 
      array (
        'param' => 'Voltage noise',
        'val' => '60',
        'unit' => 'nV/√Hz',
      ),
      5 => 
      array (
        'param' => 'Supply current (per channel)',
        'val' => '0.6',
        'unit' => 'mA',
      ),
    ),
  ),
  'LM358' => 
  array (
    'description' => 'Low power dual operational amplifier',
    'aliases' => 
    array (
      0 => 'LM158',
      1 => 'LM258',
      2 => 'LM2904',
    ),
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM158.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1OUT',
        'desc' => 'output 1',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1IN-',
        'desc' => 'inverting input 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1IN+',
        'desc' => 'non-inverting input 1',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2IN+',
        'desc' => 'non-inverting input 2',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2IN-',
        'desc' => 'inverting input 1',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2OUT',
        'desc' => 'output 2',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => 
        array (
          0 => '32 (LM158/258/358)',
          1 => '26 (LM2904)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Input offset voltage',
        'val' => '2',
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Unity-gain bandwidth',
        'val' => '1',
        'unit' => 'MHz',
      ),
      3 => 
      array (
        'param' => 'dc voltage gain',
        'val' => '100',
        'unit' => 'dB',
      ),
      4 => 
      array (
        'param' => 'Supply current',
        'val' => '0.5',
        'unit' => 'mA',
      ),
    ),
  ),
  'LM380' => 
  array (
    'description' => '2.5W audio power amplifier',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM380.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'BYPASS',
        'desc' => 'bypass',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'IN+',
        'desc' => 'non-inverting input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'GND',
        'desc' => 'ground (heat sink)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'GND',
        'desc' => 'ground (heat sink)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'GND',
        'desc' => 'ground (heat sink)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'IN-',
        'desc' => 'inverting input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'OUT',
        'desc' => 'output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground (heat sink)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'GND',
        'desc' => 'ground (heat sink)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'GND',
        'desc' => 'ground (heat sink)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '22',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Maximum peak current',
        'val' => '1.3',
        'unit' => 'A',
      ),
      2 => 
      array (
        'param' => 'Maximum input voltage',
        'val' => '±0.5',
        'unit' => 'V',
      ),
      3 => 
      array (
        'param' => 'Output power',
        'val' => '2.5',
        'unit' => 'W',
      ),
      4 => 
      array (
        'param' => 'Quiescent power drain',
        'val' => '0.13',
        'unit' => 'W',
      ),
      5 => 
      array (
        'param' => 'Bandwidth',
        'val' => '100',
        'unit' => 'kHz',
      ),
      6 => 
      array (
        'param' => 'Gain',
        'val' => '50',
        'unit' => 'V/V',
      ),
      7 => 
      array (
        'param' => 'Input impedance',
        'val' => '150',
        'unit' => 'kΩ',
      ),
    ),
  ),
  'LM384' => 
  array (
    'description' => '5W audio power amplifier',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM384.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'BYPASS',
        'desc' => 'bypass',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'IN+',
        'desc' => 'non-inverting input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'GND',
        'desc' => 'ground (heat sink)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'GND',
        'desc' => 'ground (heat sink)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'GND',
        'desc' => 'ground (heat sink)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'IN-',
        'desc' => 'inverting input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'OUT',
        'desc' => 'output',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground (heat sink)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'GND',
        'desc' => 'ground (heat sink)',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'GND',
        'desc' => 'ground (heat sink)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '26',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Minimum supply voltage',
        'val' => '12',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Maximum peak current',
        'val' => '1.3',
        'unit' => 'A',
      ),
      3 => 
      array (
        'param' => 'Maximum input voltage',
        'val' => '±0.5',
        'unit' => 'V',
      ),
      4 => 
      array (
        'param' => 'Output power',
        'val' => '5',
        'unit' => 'W',
      ),
      5 => 
      array (
        'param' => 'Bandwidth',
        'val' => '450',
        'unit' => 'kHz',
      ),
      6 => 
      array (
        'param' => 'Gain',
        'val' => '50',
        'unit' => 'V/V',
      ),
      7 => 
      array (
        'param' => 'Input impedance',
        'val' => '150',
        'unit' => 'kΩ',
      ),
    ),
  ),
  'LM386' => 
  array (
    'description' => 'Low voltage audio power amplifier',
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM386.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'GAIN',
        'desc' => 'gain adjustment',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'IN-',
        'desc' => 'inverting input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'IN+',
        'desc' => 'non-inverting input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'OUT',
        'desc' => 'output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'BYPASS',
        'desc' => 'bypass',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GAIN',
        'desc' => 'gain adjustment',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Supply voltage',
        'val' => 
        array (
          0 => '4 (min)',
          1 => '12 (max)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Quiescent current',
        'val' => '4',
        'unit' => 'mA',
      ),
      2 => 
      array (
        'param' => 'Output power',
        'val' => '325',
        'unit' => 'mW',
      ),
      3 => 
      array (
        'param' => 'Voltage gain',
        'val' => 
        array (
          0 => '20 (min)',
          1 => '200 (max)',
        ),
      ),
      4 => 
      array (
        'param' => 'Bandwidth',
        'val' => '300',
        'unit' => 'kHz',
      ),
      5 => 
      array (
        'param' => 'Total harmonic distortion',
        'val' => '0.2',
        'unit' => '%',
      ),
    ),
    'notes' => 
    array (
      0 => 'The gain can be varied between 20 and 200 with a resistor in series with a capacitor across pins 1 and 8.',
    ),
  ),
  'LM393' => 
  array (
    'description' => 'Low-power, low-offset dual comparator',
    'aliases' => 
    array (
      0 => 'LM193',
      1 => 'LM293',
    ),
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'linear',
    'datasheet' => 'http://www.national.com/ds/LM/LM193.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1OUT',
        'desc' => 'output 1',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1IN-',
        'desc' => 'inverting input 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1IN+',
        'desc' => 'non-inverting input 1',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2IN+',
        'desc' => 'non-inverting input 2',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2IN-',
        'desc' => 'inverting input 2',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2OUT',
        'desc' => 'output 2',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '36',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Offset voltage',
        'val' => '1',
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Response time',
        'val' => '1.3',
        'unit' => 'µs',
      ),
      3 => 
      array (
        'param' => 'Supply current',
        'val' => '0.4',
        'unit' => 'mA',
      ),
    ),
  ),
  'MAX1771' => 
  array (
    'description' => 'High-efficiency, low IQ, step-up DC-DC controller',
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'Maxim',
    'datasheet' => 'http://datasheets.maxim-ic.com/en/ds/MAX1771.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'EXT',
        'desc' => 'gate drive for external n-channel power transistor',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'FB',
        'desc' => 'feedback input for adjustable output (tie to GND for fixed output)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'SHDN',
        'desc' => 'shutdown (active high)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'REF',
        'desc' => '1.5V reference output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'AGND',
        'desc' => 'analog ground',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'output driver (high-current) ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'CS',
        'desc' => 'current sense amplifier input',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Input voltage',
        'val' => 
        array (
          0 => '2 (min)',
          1 => '16.5 (max)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Output voltage (when fixed)',
        'val' => '12',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Maximum output power',
        'val' => '24',
        'unit' => 'W',
      ),
    ),
  ),
  'MAX232' => 
  array (
    'description' => '+5V-powered multichannel RS-232 driver/receiver',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => 'Maxim',
    'datasheet' => 'http://datasheets.maxim-ic.com/en/ds/MAX220-MAX249.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'C1+',
        'desc' => 'capacitor 1 connection',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'V+',
        'desc' => '+10V output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'C1-',
        'desc' => 'capacitor 1 connection',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'C2+',
        'desc' => 'capacitor 2 connection',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'C2-',
        'desc' => 'capacitor 2 connection',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'V-',
        'desc' => '-10V output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'T2__OUT',
        'desc' => 'TTL/CMOS output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'R2__IN',
        'desc' => 'RS-232 input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'R2__OUT',
        'desc' => 'RS-232 output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'T2__IN',
        'desc' => 'TTL/CMOS input',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'T1__IN',
        'desc' => 'TTL/CMOS input',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'R1__OUT',
        'desc' => 'RS-232 output',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'R1__IN',
        'desc' => 'RS-232 input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'T1__OUT',
        'desc' => 'TTL/CMOS output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => '+5V supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Data rate',
        'val' => '120',
        'unit' => 'kbps',
      ),
    ),
    'notes' => 
    array (
      0 => 'Use five capacitors; C1 between pins 1 and 3, C2 between pins 4 and 5, C3 between pin 2 and +5v, C4 between ground and pin 6, and C5 between +5V and ground. See datasheet for schematic.',
      1 => 'C1 through C5 should be 1.0 µF electrolytic capacitors.',
    ),
  ),
  'MC34063' => 
  array (
    'description' => 'Step up/down inverting switching regulator',
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'power',
    'datasheet' => 'http://www.onsemi.com/pub_link/Collateral/MC34063A-D.PDF',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'SW C',
        'desc' => 'switch collector',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'SW E',
        'desc' => 'switch emitter',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'CAP',
        'desc' => 'timing capacitor',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'COMP IN',
        'desc' => 'comparator inverting input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'I__pk SENSE',
        'desc' => 'I__pk sense',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'DRIVER C',
        'desc' => 'driver collector',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Supply voltage',
        'val' => 
        array (
          0 => '3 (min)',
          1 => '40 (max)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Output switch current',
        'val' => '1.5',
        'unit' => 'A',
      ),
    ),
  ),
  'MCP23017' => 
  array (
    'description' => '16-Bit I/O Expander with Serial Interface',
    'aliases' => 
    array (
    ),
    'package' => 'DIP',
    'pincount' => 28,
    'family' => 'Microchip',
    'datasheet' => 'http://ww1.microchip.com/downloads/en/DeviceDoc/21952b.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'GPB0',
        'desc' => 'Bidirectional I/O pin.',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'GPB1',
        'desc' => 'Bidirectional I/O pin.',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'GPB2',
        'desc' => 'Bidirectional I/O pin.',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'GPB3',
        'desc' => 'Bidirectional I/O pin.',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'GPB4',
        'desc' => 'Bidirectional I/O pin.',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'GPB5',
        'desc' => 'Bidirectional I/O pin.',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GPB6',
        'desc' => 'Bidirectional I/O pin.',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GPB7',
        'desc' => 'Bidirectional I/O pin.',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'V__DD',
        'desc' => 'Power',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'V__SS',
        'desc' => 'Ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'NC',
        'desc' => 'Not connected',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'SCL',
        'desc' => 'Serial clock input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'SDA',
        'desc' => 'Serial data I/O',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'NC',
        'desc' => 'Not connected',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'A0',
        'desc' => 'Hardware address pin. Must be externally biased.',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'A1',
        'desc' => 'Hardware address pin. Must be externally biased.',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'A2',
        'desc' => 'Hardware address pin. Must be externally biased.',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => '~RESET',
        'desc' => 'Hardware reset. Must be externally biased.',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'INTB',
        'desc' => 'Interrupt output for PORTB. Can be configured as active-high, active-low or open-drain.',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'INTA',
        'desc' => 'Interrupt output for PORTB. Can be configured as active-high, active-low or open-drain.',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'GPA0',
        'desc' => 'Bidirectional I/O pin.',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'GPA1',
        'desc' => 'Bidirectional I/O pin.',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'GPA2',
        'desc' => 'Bidirectional I/O pin.',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'GPA3',
        'desc' => 'Bidirectional I/O pin.',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'GPA4',
        'desc' => 'Bidirectional I/O pin.',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'GPA5',
        'desc' => 'Bidirectional I/O pin.',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'GPA6',
        'desc' => 'Bidirectional I/O pin.',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'GPA7',
        'desc' => 'Bidirectional I/O pin.',
      ),
    ),
  ),
  'MCP3002' => 
  array (
    'description' => 'Dual channel 10-bit ADC with SPI interface',
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'Microchip',
    'datasheet' => 'http://ww1.microchip.com/downloads/en/DeviceDoc/21294d.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~CS~/SHDN',
        'desc' => 'chip select/shutdown',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'CH0',
        'desc' => 'channel 0 analog input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'CH1',
        'desc' => 'channel 1 analog input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'D__IN',
        'desc' => 'serial data in',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'D__OUT',
        'desc' => 'serial data out',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'CLK',
        'desc' => 'serial clock',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'V__CC/V__REF',
        'desc' => '+2.7V to 5.5V supply/reference voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum sampling rate',
        'val' => 
        array (
          0 => '200 (Vcc = 5V)',
          1 => '75 (Vcc = 2.7V)',
        ),
        'unit' => 'ksps',
      ),
      1 => 
      array (
        'param' => 'Differential nonlinearity',
        'val' => '±1',
        'unit' => 'LSB',
      ),
      2 => 
      array (
        'param' => 'Integral nonlinearity',
        'val' => '±1',
        'unit' => 'LSB',
      ),
      3 => 
      array (
        'param' => 'Typical active current',
        'val' => '375',
        'unit' => 'µA',
      ),
    ),
  ),
  'MCP3201' => 
  array (
    'name' => 'MCP3201',
    'description' => '12-Bit A/D SPI interface A/D Converter',
    'aliases' => 
    array (
    ),
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'Microchip',
    'datasheet' => 'http://ww1.microchip.com/downloads/en/DeviceDoc/21290e.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'V__Ref',
        'desc' => 'Analog reference voltage',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'IN+',
        'desc' => 'Positive analog input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'IN-',
        'desc' => 'Negative analog input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'V__SS',
        'desc' => 'Ground',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '~CS~/SHDN',
        'desc' => 'Chip select/shutdown',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'D__OUT',
        'desc' => 'SPI data out',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'CLK',
        'desc' => 'SPI Clock',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'V__DD',
        'desc' => 'Positive supply voltage (+2.7 to 5.5V)',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Resolution',
        'val' => '12',
        'unit' => 'bits',
      ),
      1 => 
      array (
        'param' => 'Maximum sample rate (V__DD = 5V)',
        'val' => '100',
        'unit' => 'ksps',
      ),
      2 => 
      array (
        'param' => 'Maximum sample rate (V__DD = 2.7V)',
        'val' => '50',
        'unit' => 'ksps',
      ),
      3 => 
      array (
        'param' => 'Minimum operating voltage',
        'val' => '2.7',
        'unit' => 'V',
      ),
      4 => 
      array (
        'param' => 'Maximum operating voltage (nominal)',
        'val' => '5.5',
        'unit' => 'V',
      ),
      5 => 
      array (
        'param' => 'Maximum operating voltage (absolute maximum rating)',
        'val' => '7',
        'unit' => 'V',
      ),
      6 => 
      array (
        'param' => 'Maximum active current (V__DD = 5V)',
        'val' => '400',
        'unit' => 'µA',
      ),
    ),
    'notes' => 
    array (
      0 => 'Also available with 2 channels (MCP3202), 4 channels (MCP3204) and 8 channels (MCP3208)',
    ),
  ),
  'MCP3202' => 
  array (
    'name' => 'MCP3202',
    'description' => '12-Bit 2-Channel SPI interface A/D Converter',
    'aliases' => 
    array (
    ),
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'Microchip',
    'datasheet' => 'http://ww1.microchip.com/downloads/aen/DeviceDoc/21034e.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~CS~/SHDN',
        'desc' => 'Chip select/Shutdown',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'CH0',
        'desc' => 'Channel 1 analog input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'CH1',
        'desc' => 'Channel 2 analog input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'V__SS',
        'desc' => 'Ground',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'D__IN',
        'desc' => 'SPI data input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'D__OUT',
        'desc' => 'SPI data output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'CLK',
        'desc' => 'SPI clock',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'V__DD/V__REF',
        'desc' => 'Supply voltage/analog reference voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Resolution',
        'val' => '12',
        'unit' => 'bits',
      ),
      1 => 
      array (
        'param' => 'Maximum sample rate (V__DD = 5V)',
        'val' => '100',
        'unit' => 'ksps',
      ),
      2 => 
      array (
        'param' => 'Maximum sample rate (V__DD = 2.7V)',
        'val' => '50',
        'unit' => 'ksps',
      ),
      3 => 
      array (
        'param' => 'Minimum operating voltage',
        'val' => '2.7',
        'unit' => 'V',
      ),
      4 => 
      array (
        'param' => 'Maximum operating voltage (nominal)',
        'val' => '5.5',
        'unit' => 'V',
      ),
      5 => 
      array (
        'param' => 'Maximum operating voltage (absolute maximum rating)',
        'val' => '7',
        'unit' => 'V',
      ),
      6 => 
      array (
        'param' => 'Maximum active current (V__DD = 5V)',
        'val' => '550',
        'unit' => 'µa',
      ),
    ),
    'notes' => 
    array (
      0 => 'Also available with 1 channel (MCP3201), 4 channels (MCP3204) and 8 channels (MCP3208)',
    ),
  ),
  'MCP3204' => 
  array (
    'name' => 'MCP3204',
    'description' => '4-channel 12 bit SPI A/D converter',
    'aliases' => 
    array (
    ),
    'package' => 'DIP',
    'pincount' => 14,
    'family' => 'microchip',
    'datasheet' => 'http://ww1.microchip.com/downloads/en/devicedoc/21298c.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'CH0',
        'desc' => 'Analog channel 0 input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'CH1',
        'desc' => 'Analog channel 1 input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'CH2',
        'desc' => 'Analog channel 2 input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'CH3',
        'desc' => 'Analog channel 3 input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'NC',
        'desc' => 'Not connected',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'NC',
        'desc' => 'Not connected',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'DGND',
        'desc' => 'Digital ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '~CS~/SHDN',
        'desc' => 'Chip select / Shutdown',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'D__IN',
        'desc' => 'Serial data input',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'D__OUT',
        'desc' => 'Serial data output',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'CLK',
        'desc' => 'SPI clock',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'AGND',
        'desc' => 'Analog ground',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'V__REF',
        'desc' => 'Analog reference input voltage',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'V__DD',
        'desc' => '+2.7 to 5.5 V power supply',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Max active current',
        'val' => '400',
        'unit' => 'µA',
      ),
      1 => 
      array (
        'param' => 'Max sampling rate',
        'val' => 
        array (
          0 => '100 (5V supply)',
          1 => '50 (2.7V supply)',
        ),
        'unit' => 'ksps',
      ),
      2 => 
      array (
        'param' => 'Resolution',
        'val' => '12',
        'unit' => 'bits',
      ),
      3 => 
      array (
        'param' => 'Conversion time',
        'val' => '12',
        'unit' => 'clock cycles',
      ),
    ),
    'notes' => 
    array (
      0 => 'Also available as one-channel (MCP3201), two-channel (MCP3202) and eight-channel (MCP3208) version',
    ),
  ),
  'NE5532' => 
  array (
    'description' => 'Dual operational amplifier',
    'aliases' => 
    array (
    ),
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'Fairchild',
    'datasheet' => 'http://www.fairchildsemi.com/ds/NE/NE5532.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1OUT',
        'desc' => 'Output 1',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1IN-',
        'desc' => 'Inverting input 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1IN+',
        'desc' => 'Non-inverting input 1',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'GND',
        'desc' => 'Ground',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2IN+',
        'desc' => 'Non-inverting input 2',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2IN-',
        'desc' => 'Inverting input 2',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2OUT',
        'desc' => 'Output 2',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'Vcc',
        'desc' => 'Supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Supply voltage',
        'val' => '±22',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Differential input voltage',
        'val' => '±13',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Input voltage',
        'val' => 'Supply voltage',
        'unit' => 'V',
      ),
      3 => 
      array (
        'param' => 'Power dissipation (8-DIP)',
        'val' => '1100',
        'unit' => 'mW',
      ),
      4 => 
      array (
        'param' => 'Power dissipation (8-SOP)',
        'val' => '500',
        'unit' => 'mW',
      ),
      5 => 
      array (
        'param' => 'Operating temperature range',
        'val' => '0~70',
        'unit' => '°C',
      ),
    ),
  ),
  'PCF8574' => 
  array (
    'description' => 'Remote 8-bit I/O expander for I2C bus',
    'aliases' => 
    array (
      0 => 'PCF8574P',
    ),
    'package' => 'DIP',
    'pincount' => 16,
    'family' => 'Philips',
    'datasheet' => 'http://www.nxp.com/acrobat_download/datasheets/PCF8574_4.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'A0',
        'desc' => 'address input 0',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'A1',
        'desc' => 'address input 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A2',
        'desc' => 'address input 2',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'P0',
        'desc' => 'quasi-bidirectional I/O 0',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'P1',
        'desc' => 'quasi-bidirectional I/O 1',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'P2',
        'desc' => 'quasi-bidirectional I/O 2',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'P3',
        'desc' => 'quasi-bidirectional I/O 3',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'supply ground',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'P4',
        'desc' => 'quasi-bidirectional I/O 4',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'P5',
        'desc' => 'quasi-bidirectional I/O 5',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'P6',
        'desc' => 'quasi-bidirectional I/O 6',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'P7',
        'desc' => 'quasi-bidirectional I/O 7',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '~INT',
        'desc' => 'interrupt output (active LOW)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'SCL',
        'desc' => 'serial clock line',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'SDA',
        'desc' => 'serial data line',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Minimum supply voltage',
        'val' => '2.5',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '6',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'LOW level output current, minimum',
        'val' => '10',
        'unit' => 'mA',
      ),
      3 => 
      array (
        'param' => 'LOW level output current, typical',
        'val' => '25',
        'unit' => 'mA',
      ),
      4 => 
      array (
        'param' => 'HIGH level output current, minimum',
        'val' => '10',
        'unit' => 'µA',
      ),
      5 => 
      array (
        'param' => 'HIGH level output current, maximum',
        'val' => '300',
        'unit' => 'µA',
      ),
    ),
    'notes' => 
    array (
      0 => 'I2C address range: 0x40-0x4e (7-bit address range: 0x20-0x27)',
    ),
  ),
  'PIC12F683' => 
  array (
    'description' => '8-Pin Flash-Based, 8-Bit CMOS Microcontrollers with nanoWatt Technology',
    'aliases' => 
    array (
    ),
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'Microchip',
    'datasheet' => 'http://ww1.microchip.com/downloads/en/DeviceDoc/41211D_.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'VDD',
        'desc' => 'Positive supply',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'GP5/T1CKI/OSC1/CLKIN',
        'desc' => 'GPIO 5, Timer1 clock, Crystal/Resonator, External clock input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'GP4/AN3/~T1G~/OSC2/CLKOUT',
        'desc' => 'GPIO 4, A/D Channel 3 input, Timer1 gate, Crystal/Resonator, FOSC/4 output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'GP3/~MCLR~/VPP',
        'desc' => 'GPIO 3, Master Clear, Programming voltage',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'GP2/AN2/T0CKI/INT/COUT/CCP1',
        'desc' => 'GPIO 2, A/D Channel 2 input, Timer0 clock input, External Interrupt, Comparator 1 output, Capture input/Compare output/PWM output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'GP1/AN1/CIN-/VREF/ICSPCLK',
        'desc' => 'GPIO 1, A/D Channel 1 input, Comparator 1 input, External Voltage Reference, Serial Programming Clock',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GP0/AN0/CIN+/ICSPDAT/ULPWU',
        'desc' => 'GPIO 0, Comparator 1 input, Serial Programming Data I/O, Ultra Low-Power Wake-up input',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'VSS',
        'desc' => 'Ground reference',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Program Memory',
        'val' => '3.5',
        'unit' => 'KB',
      ),
      1 => 
      array (
        'param' => 'CPU Speed',
        'val' => '5',
        'unit' => 'MIPS',
      ),
      2 => 
      array (
        'param' => 'RAM',
        'val' => '128',
        'unit' => 'Bytes',
      ),
      3 => 
      array (
        'param' => 'Data EEPROM',
        'val' => '256',
        'unit' => 'Bytes',
      ),
    ),
    'notes' => 
    array (
      0 => 'The Low Pin-count (8) PIC® Flash microcontroller products offer all of the advantages of the well recognized mid-range x14 architecture with standardized features including a wide operating voltage of 2.0-5.5 volts, on-board EEPROM Data Memory, and nanoWatt Technology. Standard analog peripherals include up to 4 channels of 10-bit A/D, an analog comparator module with a single comparator, programmable on-chip voltage reference and a Standard Capture/Compare/PWM (CCP) module.',
    ),
  ),
  'PIC16F1936' => 
  array (
    'description' => '8-Bit CMOS Microcontrollers with LCD Driver with nano Watt XLPTM Technology',
    'aliases' => 
    array (
    ),
    'package' => 'DIP',
    'pincount' => 28,
    'family' => 'Microchip 16F',
    'datasheet' => 'http://ww1.microchip.com/downloads/en/DeviceDoc/41364C.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'VPP/~MCLR~/RE3',
        'desc' => 'Programming voltage, Master Clear, General purpose input',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'SEG12/VCAP/~SS~/SRNQ/C2OUT/C12IN0-/AN0/RA0',
        'desc' => 'LCD Analog output, Filter capacitor, Slave Select input, SR Latch inverting output, Comparator C2 output, Comparator C1 or C2 negative input, A/D Channel 0 input, General purpose I/O',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'SEG7/C12IN1-/AN1/RA1',
        'desc' => 'LCD Analog output, Comparator C1 or C2 negative input, A/D Channel 1 input, General purpose I/O',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'COM2/DACOUT/VREF-/C2IN+/AN2/RA2',
        'desc' => 'LCD Analog output, Comparator Voltage Reference output, A/D Negative Voltage Reference input, Comparator C2 positive input, A/D Channel 2 input, General purpose I/O',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'SEG15/COM3/VREF+/C1IN+/AN3/RA3',
        'desc' => 'LCD Analog output, LCD Analog output, A/D Voltage Reference input, Comparator C1 positive input, A/D Channel 3 input, General purpose I/O',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'SEG4/CCP5/SRQ/T0CKI/CPS6/C1OUT/RA4',
        'desc' => 'LCD Analog output, Capture/Compare/PWM5, SR Latch non-inverting output, Timer0 clock input, Capacitive sensing input 6, Comparator C1 output, General purpose I/O',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'SEG5/VCAP/~SS~/SRNQ/CPS7/C2OUT/AN4/RA5',
        'desc' => 'LCD Analog output, Filter capacitor, Slave Select input, SR Latch inverting output, Capacitive sensing input 7, Comparator C2 output, A/D Channel 4 input, General purpose I/O',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'GND',
        'desc' => 'Ground reference',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'SEG2/CLKIN/OSC1/RA7',
        'desc' => 'LCD Analog output, External clock input, Crystal/Resonator, General purpose I/O',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'SEG1/VCAP/CLKOUT/OSC2/RA6',
        'desc' => 'LCD Analog output, Filter capacitor, FOSC/4 output, Crystal/Resonator, General purpose I/O',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'P2B/T1CKI/T1OSO/RC0',
        'desc' => 'PWM output, Timer1 clock input, Timer1 oscillator connection, General purpose I/O',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'P2A/CCP2/T1OSI/RC1',
        'desc' => 'PWM output, Capture/Compare/PWM2, Timer1 oscillator connection, General purpose I/O',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'SEG3/P1A/CCP1/RC2',
        'desc' => 'LCD Analog output, PWM output, Capture/Compare/PWM1, General purpose I/O',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'SEG6/SCL/SCK/RC3',
        'desc' => 'LCD Analog output, I2C clock, SPI clock, General purpose I/O',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'RC4/SDI/SDA/T1G/SEG11',
        'desc' => 'General purpose I/O, SPI data input, I2C data input/output, Timer1 Gate input, LCD Analog output,',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'RC5/SDO/SEG10',
        'desc' => 'General purpose I/O, SPI data output, LCD Analog output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'RC6/TX/CK/CCP3/P3A/SEG9',
        'desc' => 'General purpose I/O, USART asynchronous transmit, USART synchronous clock, Capture/Compare/PWM3, PWM output, LCD Analog output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'RC7/RX/DT/P3B/SEG8',
        'desc' => 'General purpose I/O, USART asynchronous input, USART synchronous data, PWM output, LCD Analog output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'GND',
        'desc' => 'Ground reference',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'VCC',
        'desc' => 'Positive supply',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'RB0/AN12/CPS0/CCP4/SRI/INT/SEG0',
        'desc' => 'General purpose I/O, A/D Channel 12 input, Capacitive sensing input 0, Capture/Compare/PWM4, SR Latch input, External interrupt, LCD analog output',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'RB1/AN10/C12IN3-/CPS1/P1C/VLCD1',
        'desc' => 'General purpose I/O, A/D Channel 10 input, Comparator C1 or C2 negative input, Capacitive sensing input 1, PWM output, LCD analog input',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'RB2/AN8/CPS2/P1B/VLCD2',
        'desc' => 'General purpose I/O, A/D Channel 8 input, Capacitive sensing input 2, PWM output',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'RB3/AN9/C12IN2-/CPS3/CCP2/P2A/VLCD3',
        'desc' => 'General purpose I/O, A/D Channel 9 input, Comparator C1 or C2 negative input, Capacitive sensing input 3, Capture/Compare/PWM2, PWM output, LCD analog input',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'RB4/AN11/CPS4/P1D/COM0',
        'desc' => 'General purpose I/O, A/D Channel 11 input, Capacitive sensing input 4, PWM output, LCD Analog output',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'RB5/AN13/CPS5/P2B/CCP3/P3A/T1G/COM1',
        'desc' => 'General purpose I/O, A/D Channel 13 input, Capacitive sensing input 5, PWM output, Capture/Compare/PWM3, PWM output, Timer1 Gate input, LCD Analog output',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'RB6/ICSPCLK/ICDCLK/SEG14',
        'desc' => 'General purpose I/O, Serial Programming Clock, In-Circuit Debug Clock, LCD Analog output',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'RB7/ICSPDAT/ICDDAT/SEG13',
        'desc' => 'General purpose I/O, ICSP Data I/O, In-Circuit Data I/O, LCD Analog output',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Program Memory',
        'val' => '14',
        'unit' => 'KB',
      ),
      1 => 
      array (
        'param' => 'CPU Speed',
        'val' => '8',
        'unit' => 'MIPS',
      ),
      2 => 
      array (
        'param' => 'RAM',
        'val' => '512',
        'unit' => 'Bytes',
      ),
      3 => 
      array (
        'param' => 'Data EEPROM',
        'val' => '256',
        'unit' => 'Bytes',
      ),
    ),
    'notes' => 
    array (
      0 => 'Internal 32MHz oscillator, 60 LCD segment drive support, Integrated Capacitive mTouch Sensing Module',
    ),
  ),
  'PIC16F84A' => 
  array (
    'description' => 'PIC16F84A Microcontroller',
    'package' => 'DIP',
    'pincount' => 18,
    'family' => 'Microchip',
    'datasheet' => 'http://www.microchip.com/stellent/idcplg?IdcService=SS_GET_PAGE&nodeId=1335&dDocName=en010230',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'RA2',
        'desc' => 'Bi-directional I/O port',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'RA3',
        'desc' => 'Bi-directional I/O port',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'RA4/T0CKI',
        'desc' => 'Bi-directional I/O port',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '~MCLR',
        'desc' => 'Master Clear (Reset) input/programming voltage
input. This pin is an active low RESET to the device.',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'GND',
        'desc' => 'Ground reference for logic and I/O pins.',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'RB0/INT',
        'desc' => 'External interrupt',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'RB1',
        'desc' => 'Bi-directional I/O port',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'RB2',
        'desc' => 'Bi-directional I/O port',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'RB3',
        'desc' => 'Bi-directional I/O port',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'RB4',
        'desc' => 'Interrupt-on-change pin.',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'RB5',
        'desc' => 'Interrupt-on-change pin.',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'RB6',
        'desc' => 'Interrupt-on-change pin, Serial programming clock',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'RB7',
        'desc' => 'Interrupt-on-change pin, Serial programming data.',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'Positive supply for logic and I/O pins.',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'OSC2/CLKIN',
        'desc' => 'Oscillator crystal output. Connects to crystal or
resonator in Crystal Oscillator mode. In RC mode,
OSC2 pin outputs CLKOUT, which has 1/4 the
frequency of OSC1 and denotes the instruction
cycle rate.',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'OSC1/CLKOUT',
        'desc' => 'Oscillator crystal input/external clock source input',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'RA0',
        'desc' => 'Bi-directional I/O port',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'RA1',
        'desc' => 'Bi-directional I/O port',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Max pin sink',
        'val' => '25',
        'unit' => 'mA',
      ),
      1 => 
      array (
        'param' => 'Max pin source',
        'val' => '25',
        'unit' => 'mA',
      ),
      2 => 
      array (
        'param' => 'Operating speed',
        'val' => '20',
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => '18-pin Flash/EEPROM 8-bit Microcontroller',
    ),
  ),
  'PIC18F13K50' => 
  array (
    'description' => '20-Pin USB Flash Microcontrollers with nanoWatt XLP™ Technology',
    'aliases' => 
    array (
      0 => 'PIC18F14K50',
    ),
    'package' => 'DIP',
    'pincount' => 20,
    'family' => 'Microchip 18F',
    'datasheet' => 'http://ww1.microchip.com/downloads/en/DeviceDoc/41350C.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'VCC',
        'desc' => 'Positive supply for logic and I/O pins',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'RA5/OSC1/CLKIN',
        'desc' => 'Digital I/O, Oscillator crystal input or external clock input, External clock source input.',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'RA4/AN3/OSC2/CLKOUT',
        'desc' => 'Digital I/O, ADC channel 3, Oscillator crystal output., In RC mode, OSC2 pin outputs CLKOUT',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'RA3/~MCLR~/VPP',
        'desc' => 'Digital input, Active-low Master Clear with internal pull-up, High voltage programming input',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'RC5/CCP1/P1A/T0CKI',
        'desc' => 'Digital I/O, Capture 1 input/Compare 1 output/PWM 1 output, Enhanced CCP1 PWM output, Timer0 external clock input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'RC4/P1B/C12OUT/SRQ',
        'desc' => 'Digital I/O, Enhanced CCP1 PWM output, Comparator C1 and C2 output, SR Latch output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'RC3/AN7/P1C/C12IN3-/PGM',
        'desc' => 'Digital I/O, ADC channel 7, Enhanced CCP1 PWM output, Comparator C1 and C2 inverting input, Low-Voltage ICSP Programming enable pin',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'RC6/AN8/~SS~/T13CKI/T1OSCI',
        'desc' => 'Digital I/O, ADC channel 8, SPI slave select input, Timer0 and Timer3 external clock input, Timer1 oscillator input',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'RC7/AN9/SDO/T1OSCO',
        'desc' => 'Digital I/O, ADC channel 9, SPI data out, Timer1 oscillator output',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'RB7/TX/CK',
        'desc' => 'Digital I/O, EUSART asynchronous transmit, EUSART synchronous clock (see related RX/DT)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'RB6/SCK/SCI',
        'desc' => 'Digital I/O, Synchronous serial clock input/output for SPI mode, Synchronous serial clock input/output for I2C mode',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'RB5/AN11/RX/DT',
        'desc' => 'Digital I/O, ADC channel 11, EUSART asynchronous receive, EUSART synchronous data (see related RX/TX)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'RB4/AN10/SDI/SDA',
        'desc' => 'Digital I/O, ADC channel 10, SPI data in, I2C data I/O',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'RC2/AN6/P1D/C12IN2-/CVREF/INT2',
        'desc' => 'Digital I/O, ADC channel 6, Enhanced CCP1 PWM output, Comparator C1 and C2 inverting input, Comparator reference voltage output, External, interrupt 0',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'RC1/AN5/C12IN-/INT1/VREF-',
        'desc' => 'Digital I/O, ADC channel 5, Comparator C1 and C2 non-inverting input, External interrupt 0, Comparator reference voltage (low) input',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'RC0/AN4/C12IN+/INT0/VREF+',
        'desc' => 'Digital I/O, ADC channel 4, Comparator C1 and C2 non-inverting input, External interrupt 0, Comparator reference voltage (high) input',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'VUSB',
        'desc' => 'Positive supply for USB transceiver',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'RA1/D-/PGC',
        'desc' => 'Digital input, USB differential minus line (input/output), ICSP programming clock pin',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'RA0/D+/PGD',
        'desc' => 'Digital input, USB differential plus line (input/output), ICSP programming data pin',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'GND',
        'desc' => 'Ground reference for logic and I/O pins',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Program Memory',
        'val' => '8',
        'unit' => 'KB',
      ),
      1 => 
      array (
        'param' => 'CPU Speed',
        'val' => '12',
        'unit' => 'MIPS',
      ),
      2 => 
      array (
        'param' => 'RAM',
        'val' => '512',
        'unit' => 'Bytes',
      ),
      3 => 
      array (
        'param' => 'Data EEPROM',
        'val' => '256',
        'unit' => 'Bytes',
      ),
    ),
    'notes' => 
    array (
      0 => 'High Performance PIC18 Core, USB v2.0 compliant interface',
    ),
  ),
  'PIC18F4550' => 
  array (
    'description' => 'PIC18F4550',
    'aliases' => 
    array (
    ),
    'package' => 'DIP',
    'pincount' => 40,
    'family' => 'Microchip',
    'datasheet' => 'http://ww1.microchip.com/downloads/en/DeviceDoc/39632e.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~MCLR~/V__PP/RE3',
        'desc' => '.',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'RA0/AN0',
        'desc' => '.',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'RA1/AN1',
        'desc' => '.',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'RA2/AN2/V__REF-/CV__REF',
        'desc' => '.',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'RA3/AN3/V__REF+',
        'desc' => '.',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'RA4/T0CKI/C1OUT/RCV',
        'desc' => '.',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'RA5/AN4/~SS~/HLVDIN/C2OUT',
        'desc' => '.',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'RE0/AN5/CK1SPP',
        'desc' => '.',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'RE1/AN6/CK2SPP',
        'desc' => '.',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'RE2/AN7/OESPP',
        'desc' => '.',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'V__DD',
        'desc' => 'Positive supply for logic and I/O pins.',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'V__SS',
        'desc' => 'Ground reference for logic and I/O pins.',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'OSC1/CLKI',
        'desc' => '.',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'OSC2/CLKO/RA6',
        'desc' => '.',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'RC0/T1OSO/T13CKI',
        'desc' => '.',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'RC1/T1OSI/CPP2/~UOE~',
        'desc' => '.',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'RC2/CCP1/P1A',
        'desc' => '.',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'V__USB',
        'desc' => 'Internal USB 3.3V voltage regulator.',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'RD0/SPP0',
        'desc' => '.',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'RD1/SPP1',
        'desc' => '.',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'RD2/SPP2',
        'desc' => '.',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'RD3/SPP3',
        'desc' => '.',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'RC4/D__-/VM',
        'desc' => '.',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'RC5/D__+/VP',
        'desc' => '.',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'RC6/TX/CK',
        'desc' => '.',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'RC7/RX/DT/SDO',
        'desc' => '.',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'RD4/SPP4',
        'desc' => '.',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'RD5/SPP5/P1B',
        'desc' => '.',
      ),
      28 => 
      array (
        'num' => '29',
        'sym' => 'RD6/SPP6/P1C',
        'desc' => '.',
      ),
      29 => 
      array (
        'num' => '30',
        'sym' => 'RD7/SPP7/P1D',
        'desc' => '.',
      ),
      30 => 
      array (
        'num' => '31',
        'sym' => 'V__SS',
        'desc' => 'Ground reference for logic and I/O pins.',
      ),
      31 => 
      array (
        'num' => '32',
        'sym' => 'V__DD',
        'desc' => 'Positive supply for logic and I/O pins.',
      ),
      32 => 
      array (
        'num' => '33',
        'sym' => 'RB0/AN12/INT0/FLT0/SDI/SDA',
        'desc' => '.',
      ),
      33 => 
      array (
        'num' => '34',
        'sym' => 'RB1/AN10/INT1/SCK/SCL',
        'desc' => '.',
      ),
      34 => 
      array (
        'num' => '35',
        'sym' => 'RB2/AN8/INT2/VMO',
        'desc' => '.',
      ),
      35 => 
      array (
        'num' => '36',
        'sym' => 'RB3/AN9/CCP2/VPO',
        'desc' => '.',
      ),
      36 => 
      array (
        'num' => '37',
        'sym' => 'RB4/AN11/KBI0/CSSPP',
        'desc' => '.',
      ),
      37 => 
      array (
        'num' => '38',
        'sym' => 'RB5/KBI1/PGM',
        'desc' => '.',
      ),
      38 => 
      array (
        'num' => '39',
        'sym' => 'RB6/KBI2/PGC',
        'desc' => '.',
      ),
      39 => 
      array (
        'num' => '40',
        'sym' => 'RB6/KBI3/PGD',
        'desc' => '.',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => '(optional) parameter name',
        'val' => '123',
        'unit' => 'ns',
      ),
    ),
  ),
  'PS2501' => 
  array (
    'description' => '4-channel optoisolator',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => 'CEL',
    'datasheet' => 'http://www.cel.com/pdf/datasheets/ps2501.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '+1',
        'desc' => 'anode 1',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '-1',
        'desc' => 'cathode 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '+2',
        'desc' => 'anode 2',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '-2',
        'desc' => 'cathode 2',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '+3',
        'desc' => 'anode 3',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '-3',
        'desc' => 'cathode 3',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '+4',
        'desc' => 'anode 4',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '-4',
        'desc' => 'cathode 4',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'E4',
        'desc' => 'emitter 4',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'C4',
        'desc' => 'collector 4',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'E3',
        'desc' => 'emitter 3',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'C3',
        'desc' => 'collector 3',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'E2',
        'desc' => 'emitter 2',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'C2',
        'desc' => 'collector 2',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'E1',
        'desc' => 'emitter 1',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'C1',
        'desc' => 'collector 1',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Isolation voltage',
        'val' => '5000',
        'unit' => 'Vrms',
      ),
      1 => 
      array (
        'param' => 'Maximum collector-emitter voltage',
        'val' => '80',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Switching time',
        'val' => 
        array (
          0 => '3 (rising)',
          1 => '5 (falling)',
        ),
        'unit' => 'µs',
      ),
    ),
  ),
  'SN754410' => 
  array (
    'description' => 'Quadruple half-H driver',
    'package' => 'DIP',
    'pincount' => 16,
    'family' => 'TI',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/sn754410.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1,2EN',
        'desc' => 'enable (drivers 1 and 2)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1A',
        'desc' => 'input 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1Y',
        'desc' => 'driver 1 output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'GND',
        'desc' => 'ground (heat sink)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'GND',
        'desc' => 'ground (heat sink)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2Y',
        'desc' => 'driver 2 output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2A',
        'desc' => 'input 2',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'V__CC2',
        'desc' => 'output supply voltage',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3,4EN',
        'desc' => 'enable (drivers 3 and 4)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3A',
        'desc' => 'input 3',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '3Y',
        'desc' => 'driver 3 output',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'GND',
        'desc' => 'ground (heat sink)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'GND',
        'desc' => 'ground (heat sink)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '4Y',
        'desc' => 'driver 4 output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '4A',
        'desc' => 'input 4',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'V__CC1',
        'desc' => 'logic supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Supply voltage',
        'val' => 
        array (
          0 => '4.5 (min)',
          1 => '36 (max)',
        ),
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Maximum output current per driver',
        'val' => '1',
        'unit' => 'A',
      ),
    ),
    'notes' => 
    array (
      0 => 'When an EN line is low, the corresponding outputs assume a high-impedance off state.',
    ),
  ),
  'SN75468' => 
  array (
    'description' => 'Seven darlington array',
    'aliases' => 
    array (
      0 => 'SN75469',
    ),
    'package' => 'DIP',
    'pincount' => 16,
    'family' => 'TI',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/sn75468.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1B',
        'desc' => 'base 1',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '2B',
        'desc' => 'base 2',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '3B',
        'desc' => 'base 3',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '4B',
        'desc' => 'base 4',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '5B',
        'desc' => 'base 5',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '6B',
        'desc' => 'base 6',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '7B',
        'desc' => 'base 7',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'E',
        'desc' => 'common emitter (ground)',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'COM',
        'desc' => 'common',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '7C',
        'desc' => 'collector 7',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '6C',
        'desc' => 'collector 6',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '5C',
        'desc' => 'collector 5',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4C',
        'desc' => 'collector 4',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '3C',
        'desc' => 'collector 3',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '2C',
        'desc' => 'collector 2',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => '1C',
        'desc' => 'collector 1',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Series resistance at bases',
        'val' => 
        array (
          0 => '2.7 (SN75468)',
          1 => '10.5 (SN75469)',
        ),
        'unit' => 'kΩ',
      ),
      1 => 
      array (
        'param' => 'Maximum collector-emitter voltage',
        'val' => '100',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Maximum input voltage',
        'val' => '30',
        'unit' => 'V',
      ),
      3 => 
      array (
        'param' => 'Maximum peak collector current',
        'val' => '500',
        'unit' => 'mA',
      ),
    ),
    'notes' => 
    array (
      0 => 'SN75468 is designed for use with 5V TTL/CMOS devices.',
      1 => 'SN75469 is designed for use with 6V-15V CMOS/PMOS devices.',
    ),
  ),
  'TC649' => 
  array (
    'description' => 'PWM fan speed controller',
    'aliases' => 
    array (
    ),
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'Microchip',
    'datasheet' => 'http://ww1.microchip.com/downloads/en/DeviceDoc/21449c.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'V__IN',
        'desc' => 'temperature sensor; voltage range of 1.25V to 2.65V (typical)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'C__F',
        'desc' => 'positive terminal for PWM ramp generator timing capacitor; 1 µF for 30 Hz PWM',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'V__AS',
        'desc' => 'auto-shutdown voltage; auto-shutdown occurs when V__IN <= V__AS',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'SENSE',
        'desc' => 'fan rotation pulses; absense of pulses indicates a fault',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '~FAULT~',
        'desc' => 'goes low to indicate a fault condition',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'V__OUT',
        'desc' => 'active high complimentary output that drives the fan motor through an NPN transistor or N-channel MOSFET',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'V__DD',
        'desc' => 'power supply',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'supply voltage',
        'val' => '6',
        'unit' => 'V',
      ),
    ),
  ),
  'TIL311' => 
  array (
    'description' => 'Hexadecimal display with logic',
    'package' => 'DIP',
    'pincount' => 14,
    'family' => 'LED',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/til311.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'V__LED',
        'desc' => 'LED supply voltage',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'B',
        'desc' => 'Latch data input B',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A',
        'desc' => 'Latch data input A',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'DP__L',
        'desc' => 'Left decimal point cathode',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '~STROBE',
        'desc' => 'Latch strobe input (active low)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '',
        'desc' => 'no pin',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'BLANK',
        'desc' => 'Display blanking input (active high)',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '',
        'desc' => 'no pin',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'DP__R',
        'desc' => 'Right decimal point cathode',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '',
        'desc' => 'no pin',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'D',
        'desc' => 'Latch data input D',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'C',
        'desc' => 'Latch data input C',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'Vcc',
        'desc' => 'Logic supply voltage',
      ),
    ),
    'notes' => 
    array (
      0 => 'Decimal points are driven independently and current-limiting resistors (typically 1kΩ) are required.',
    ),
  ),
  'TL081' => 
  array (
    'description' => 'JFET-input operational amplifier',
    'aliases' => 
    array (
      0 => 'TL061',
      1 => 'TL071',
    ),
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'linear',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/tl08a.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'OFFSET N1',
        'desc' => 'offset',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'IN-',
        'desc' => 'inverting input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'IN+',
        'desc' => 'non-inverting input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'V__CC-',
        'desc' => 'negative supply voltage',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'OFFSET N2',
        'desc' => 'offset',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'OUT',
        'desc' => 'output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'V__CC+',
        'desc' => 'positive supply voltage',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '±18',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Offset voltage',
        'val' => '3',
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Unity-gain bandwidth',
        'val' => '3',
        'unit' => 'MHz',
      ),
      3 => 
      array (
        'param' => 'Slew rate at unity gain',
        'val' => '13',
        'unit' => 'V/µs',
      ),
      4 => 
      array (
        'param' => 'Rise time',
        'val' => 
        array (
          0 => '0.2 (TL06x)',
          1 => '0.1 (TL07x)',
          2 => '0.05 (TL08x)',
        ),
        'unit' => 'µs',
      ),
      5 => 
      array (
        'param' => 'Overshoot factor',
        'val' => 
        array (
          0 => '10 (TL061x',
          1 => '20 (TL07x)',
          2 => '20 (TL08x)',
        ),
        'unit' => '%',
      ),
      6 => 
      array (
        'param' => 'Equivalent input noise voltage at f = 1 kHz',
        'val' => 
        array (
          0 => '42 (TL06x)',
          1 => '18 (TL07x)',
          2 => '18 (TL08x)',
        ),
        'unit' => 'nV/√~Hz~',
      ),
      7 => 
      array (
        'param' => 'Supply current (each amplifier)',
        'val' => 
        array (
          0 => '0.2 (TL06x)',
          1 => '1.4 (TL07x)',
          2 => '1.4 (TL08x)',
        ),
        'unit' => 'mA',
      ),
    ),
    'notes' => 
    array (
      0 => 'The TL06x series are low-power versions of the TL08x series.',
      1 => 'The TL07x series are low-noise versions of the TL08x series.',
    ),
  ),
  'TL082' => 
  array (
    'description' => 'Dual JFET-input operational amplifier',
    'aliases' => 
    array (
      0 => 'TL062',
      1 => 'TL072',
    ),
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'linear',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/tl081a.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1OUT',
        'desc' => 'output 1',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1IN-',
        'desc' => 'inverting input 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1IN+',
        'desc' => 'non-inverting input 1',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'V__CC-',
        'desc' => 'negative supply voltage',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2IN+',
        'desc' => 'non-inverting input 2',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2IN-',
        'desc' => 'inverting input 2',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2OUT',
        'desc' => 'output 2',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'V__CC+',
        'desc' => 'positive supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '±18',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Offset voltage',
        'val' => '3',
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Unity-gain bandwidth',
        'val' => '3',
        'unit' => 'MHz',
      ),
      3 => 
      array (
        'param' => 'Slew rate at unity gain',
        'val' => '13',
        'unit' => 'V/µs',
      ),
      4 => 
      array (
        'param' => 'Rise time',
        'val' => 
        array (
          0 => '0.2 (TL06x)',
          1 => '0.1 (TL07x)',
          2 => '0.05 (TL08x)',
        ),
        'unit' => 'µs',
      ),
      5 => 
      array (
        'param' => 'Overshoot factor',
        'val' => 
        array (
          0 => '10 (TL061x)',
          1 => '20 (TL07x)',
          2 => '20 (TL08x)',
        ),
        'unit' => '%',
      ),
      6 => 
      array (
        'param' => 'Equivalent input noise voltage at f = 1 kHz',
        'val' => 
        array (
          0 => '42 (TL06x)',
          1 => '18 (TL07x)',
          2 => '18 (TL08x)',
        ),
        'unit' => 'nV/√Hz',
      ),
      7 => 
      array (
        'param' => 'Supply current (each amplifier)',
        'val' => 
        array (
          0 => '0.2 (TL06x)',
          1 => '1.4 (TL07x)',
          2 => '1.4 (TL08x)',
        ),
        'unit' => 'mA',
      ),
    ),
    'notes' => 
    array (
      0 => 'The TL06x series are low-power versions of the TL08x series.',
      1 => 'The TL07x series are low-noise versions of the TL08x series.',
    ),
  ),
  'TL084' => 
  array (
    'description' => 'Quad JFET-input operational amplifier',
    'aliases' => 
    array (
      0 => 'TL064',
      1 => 'TL074',
    ),
    'package' => 'DIP',
    'pincount' => 14,
    'family' => 'linear',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/tl081a.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1OUT',
        'desc' => 'output 1',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1IN-',
        'desc' => 'inverting input 1',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1IN+',
        'desc' => 'non-inverting input 1',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'V__CC+',
        'desc' => 'positive supply voltage',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2IN+',
        'desc' => 'non-inverting input 2',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2IN-',
        'desc' => 'inverting input 2',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2OUT',
        'desc' => 'output 2',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '3OUT',
        'desc' => 'output 3',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '3IN-',
        'desc' => 'inverting input 3',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '3IN+',
        'desc' => 'non-inverting input 3',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'V__CC-',
        'desc' => 'negative supply voltage',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '4IN+',
        'desc' => 'non-inverting input 4',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4IN-',
        'desc' => 'inverting input 4',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '4OUT',
        'desc' => 'output 4',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum supply voltage',
        'val' => '±18',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Offset voltage',
        'val' => '3',
        'unit' => 'mV',
      ),
      2 => 
      array (
        'param' => 'Unity-gain bandwidth',
        'val' => '3',
        'unit' => 'MHz',
      ),
      3 => 
      array (
        'param' => 'Slew rate at unity gain',
        'val' => '13',
        'unit' => 'V/µs',
      ),
      4 => 
      array (
        'param' => 'Rise time',
        'val' => 
        array (
          0 => '0.2 (TL06x)',
          1 => '0.1 (TL07x)',
          2 => '0.05 (TL08x)',
        ),
        'unit' => 'µs',
      ),
      5 => 
      array (
        'param' => 'Overshoot factor',
        'val' => 
        array (
          0 => '10 (TL061x',
          1 => '20 (TL07x)',
          2 => '20 (TL08x)',
        ),
        'unit' => '%',
      ),
      6 => 
      array (
        'param' => 'Equivalent input noise voltage at f = 1 kHz',
        'val' => 
        array (
          0 => '42 (TL06x)',
          1 => '18 (TL07x)',
          2 => '18 (TL08x)',
        ),
        'unit' => 'nV/√Hz',
      ),
      7 => 
      array (
        'param' => 'Supply current (each amplifier)',
        'val' => 
        array (
          0 => '0.2 (TL06x)',
          1 => '1.4 (TL07x)',
          2 => '1.4 (TL08x)',
        ),
        'unit' => 'mA',
      ),
    ),
    'notes' => 
    array (
      0 => 'The TL06x series are low-power versions of the TL08x series.',
      1 => 'The TL07x series are low-noise versions of the TL08x series.',
    ),
  ),
  'TLC272' => 
  array (
    'name' => 'TLC272',
    'description' => 'Precision JFET-input low-offset dual operation amplifier',
    'aliases' => 
    array (
    ),
    'package' => 'DIP',
    'pincount' => 8,
    'family' => 'opamps',
    'datasheet' => 'http://www.hep.upenn.edu/SNO/daq/parts/tlc272.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1OUT',
        'desc' => 'First opamp output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '1IN-',
        'desc' => 'First opamp inverting input',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '1IN+',
        'desc' => 'First opamp non-inverting input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'GND',
        'desc' => 'Ground',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '2IN+',
        'desc' => 'Second opamp non-inverting input',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '2IN-',
        'desc' => 'Second opamp inverting input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '2OUT',
        'desc' => 'Second opamp output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'V__DD',
        'desc' => 'Supply voltage',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum offset voltage (trimmed)',
        'val' => '500',
        'unit' => 'µV',
      ),
      1 => 
      array (
        'param' => 'Supply voltage (absolute maximum)',
        'val' => '18',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Slew rate at unity gain (V__DD = 5V, V__IPP = 1V)',
        'val' => '3.6',
        'unit' => 'V/µs',
      ),
      3 => 
      array (
        'param' => 'Unity-gain bandwidth',
        'val' => '1.7',
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'Pinout LM358 compatible',
      1 => 'Designed for high-impedance measurement applications',
    ),
  ),
  'TMS9918A' => 
  array (
    'description' => 'Video Display Processor (composite output)',
    'aliases' => 
    array (
    ),
    'package' => 'DIP',
    'pincount' => 40,
    'family' => 'Texas Instruments',
    'datasheet' => 'http://www.cs.columbia.edu/~sedwards/papers/TMS9918.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~RAS',
        'desc' => 'VRAM row address strobe',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '~CAS',
        'desc' => 'VRAM column address strobe',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'AD7',
        'desc' => 'VRAM address/data bus (least significant bit)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'AD6',
        'desc' => 'VRAM address/data bus',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'AD5',
        'desc' => 'VRAM address/data bus',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'AD4',
        'desc' => 'VRAM address/data bus',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'AD3',
        'desc' => 'VRAM address/data bus',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'AD2',
        'desc' => 'VRAM address/data bus',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'AD1',
        'desc' => 'VRAM address/data bus',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'AD0',
        'desc' => 'VRAM address/data bus (most significant bit)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'R/~W',
        'desc' => 'VRAM write strobe',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'MODE',
        'desc' => 'CPU interface mode select (usu. a CPU address line)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '~CSW',
        'desc' => 'CPU-VDP write strobe',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~CSR',
        'desc' => 'CPU-VDP read strobe',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => '~INT',
        'desc' => 'CPU interrupt output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'CD7',
        'desc' => 'CPU data bus (least significant bit)',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'CD6',
        'desc' => 'CPU data bus',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'CD5',
        'desc' => 'CPU data bus',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'CD4',
        'desc' => 'CPU data bus',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'CD3',
        'desc' => 'CPU data bus',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'CD2',
        'desc' => 'CPU data bus',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'CD1',
        'desc' => 'CPU data bus',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'CD0',
        'desc' => 'CPU data bus (most significant bit)',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'RD7',
        'desc' => 'VRAM read data bus (least significant bit)',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'RD6',
        'desc' => 'VRAM read data bus',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'RD5',
        'desc' => 'VRAM read data bus',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'RD4',
        'desc' => 'VRAM read data bus',
      ),
      28 => 
      array (
        'num' => '29',
        'sym' => 'RD3',
        'desc' => 'VRAM read data bus',
      ),
      29 => 
      array (
        'num' => '30',
        'sym' => 'RD2',
        'desc' => 'VRAM read data bus',
      ),
      30 => 
      array (
        'num' => '31',
        'sym' => 'RD1',
        'desc' => 'VRAM read data bus',
      ),
      31 => 
      array (
        'num' => '32',
        'sym' => 'RD0',
        'desc' => 'VRAM read data bus (most significant bit)',
      ),
      32 => 
      array (
        'num' => '33',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
      33 => 
      array (
        'num' => '34',
        'sym' => '~RESET~/SYNC',
        'desc' => 'reset (active low; when above +9V, sync input for ext. video)',
      ),
      34 => 
      array (
        'num' => '35',
        'sym' => 'EXTVDP',
        'desc' => 'external VDP input',
      ),
      35 => 
      array (
        'num' => '36',
        'sym' => 'COMVID',
        'desc' => 'composite video output',
      ),
      36 => 
      array (
        'num' => '37',
        'sym' => 'GROMCLK',
        'desc' => 'VDP output clock; XTAL/24',
      ),
      37 => 
      array (
        'num' => '38',
        'sym' => 'CPUCLK',
        'desc' => 'VDP color burst frequency clock',
      ),
      38 => 
      array (
        'num' => '39',
        'sym' => 'XTAL1',
        'desc' => 'crystal input',
      ),
      39 => 
      array (
        'num' => '40',
        'sym' => 'XTAL2',
        'desc' => 'crystal input',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'XTAL frequency',
        'val' => '10.738635 ± 0.05%',
        'unit' => 'MHz',
      ),
      1 => 
      array (
        'param' => 'XTAL load capacitors',
        'val' => 
        array (
          0 => '15 (min)',
          1 => '39 (max)',
        ),
        'unit' => 'pF',
      ),
      2 => 
      array (
        'param' => 'VRAM size',
        'val' => '4 or 16',
        'unit' => 'KB',
      ),
      3 => 
      array (
        'param' => 'Number of colors',
        'val' => '15 plus transparent',
      ),
      4 => 
      array (
        'param' => 'Number of sprites',
        'val' => '32',
      ),
      5 => 
      array (
        'param' => 'Sprites per line',
        'val' => '4',
      ),
    ),
    'notes' => 
    array (
      0 => 'Bit order numbering is backwards. 0 is the MSB and 7 is the LSB.',
      1 => 'Write to control register: set MODE high, write data byte, write destination register in the format 10000RRR.',
      2 => 'Write to VRAM: set MODE high, write lower address bits, write upper address bits (with highest bits set to 01), set MODE low, write data bytes. Address autoincrements.',
      3 => 'Read from status register: set MODE high, read byte.',
      4 => 'Read from VRAM: write lower address bits, write upper address bits (with highest bits set to 00), set MODE low, read data bytes. Address autoincrements.',
      5 => 'MODE determines the source or destination of a CPU read/write data transfer.',
      6 => 'Control registers:
<table>
<tr><td>0</td><td>VDP option control bits (mode, external VDP enable)</td></tr>
<tr><td>1</td><td>VDP option control bits (4/16K RAM, BLANK, interrupt enable, mode, sprite size, magnification)</td></tr>
<tr><td>2</td><td>Name table base address (0-15)</td></tr>
<tr><td>3</td><td>Color table base address (0-255)</td></tr>
<tr><td>4</td><td>Pattern generator base address (0-7)</td></tr>
<tr><td>5</td><td>Sprite attribute table base address (0-127)</td></tr>
<tr><td>6</td><td>Sprite pattern generator base address (0-7)</td></tr>
<tr><td>7</td><td>Text color, backdrop color</td></tr>
</table>',
      7 => 'Graphics modes:
<table>
<tr><td>Text mode</td><td>40x24 text positions, 6x8-pixel patterns, two colors, no sprites</td></tr>
<tr><td>Graphics I mode</td><td>32x24 tile positions, 8x8-pixel patterns, 256 possible patterns with 2 colors per pattern, sprites</td></tr>
<tr><td>Graphics II mode</td><td>32x24 tile positions, 8x8-pixel patterns, 768 possible patterns with 2 colors per row, sprites</td></tr>
<tr><td>Multicolor mode</td><td>64x48 solid 4x4-pixel blocks of any color, sprites</td></tr>
</table>',
    ),
  ),
  'TMS9928A' => 
  array (
    'description' => 'Video Display Processor (component output)',
    'aliases' => 
    array (
      0 => 'TMS9929A',
    ),
    'package' => 'DIP',
    'pincount' => 40,
    'family' => 'Texas Instruments',
    'datasheet' => 'http://www.cs.columbia.edu/~sedwards/papers/TMS9918.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '~RAS',
        'desc' => 'VRAM row address strobe',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '~CAS',
        'desc' => 'VRAM column address strobe',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'AD7',
        'desc' => 'VRAM address/data bus (least significant bit)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'AD6',
        'desc' => 'VRAM address/data bus',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'AD5',
        'desc' => 'VRAM address/data bus',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'AD4',
        'desc' => 'VRAM address/data bus',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'AD3',
        'desc' => 'VRAM address/data bus',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'AD2',
        'desc' => 'VRAM address/data bus',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'AD1',
        'desc' => 'VRAM address/data bus',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'AD0',
        'desc' => 'VRAM address/data bus (most significant bit)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'R/~W',
        'desc' => 'VRAM write strobe',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'MODE',
        'desc' => 'CPU interface mode select (usu. a CPU address line)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '~CSW',
        'desc' => 'CPU-VDP write strobe',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '~CSR',
        'desc' => 'CPU-VDP read strobe',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => '~INT',
        'desc' => 'CPU interrupt output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'CD7',
        'desc' => 'CPU data bus (least significant bit)',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'CD6',
        'desc' => 'CPU data bus',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'CD5',
        'desc' => 'CPU data bus',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'CD4',
        'desc' => 'CPU data bus',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'CD3',
        'desc' => 'CPU data bus',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'CD2',
        'desc' => 'CPU data bus',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => 'CD1',
        'desc' => 'CPU data bus',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'CD0',
        'desc' => 'CPU data bus (most significant bit)',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'RD7',
        'desc' => 'VRAM read data bus (least significant bit)',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => 'RD6',
        'desc' => 'VRAM read data bus',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'RD5',
        'desc' => 'VRAM read data bus',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'RD4',
        'desc' => 'VRAM read data bus',
      ),
      28 => 
      array (
        'num' => '29',
        'sym' => 'RD3',
        'desc' => 'VRAM read data bus',
      ),
      29 => 
      array (
        'num' => '30',
        'sym' => 'RD2',
        'desc' => 'VRAM read data bus',
      ),
      30 => 
      array (
        'num' => '31',
        'sym' => 'RD1',
        'desc' => 'VRAM read data bus',
      ),
      31 => 
      array (
        'num' => '32',
        'sym' => 'RD0',
        'desc' => 'VRAM read data bus (most significant bit)',
      ),
      32 => 
      array (
        'num' => '33',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
      33 => 
      array (
        'num' => '34',
        'sym' => '~RESET~/SYNC',
        'desc' => 'reset (active low; when above +9V, sync input for ext. video)',
      ),
      34 => 
      array (
        'num' => '35',
        'sym' => 'B-Y',
        'desc' => 'B-Y color difference output',
      ),
      35 => 
      array (
        'num' => '36',
        'sym' => 'Y',
        'desc' => 'luminance/sync output',
      ),
      36 => 
      array (
        'num' => '37',
        'sym' => 'GROMCLK',
        'desc' => 'VDP output clock; XTAL/24',
      ),
      37 => 
      array (
        'num' => '38',
        'sym' => 'R-Y',
        'desc' => 'R-Y color difference output',
      ),
      38 => 
      array (
        'num' => '39',
        'sym' => 'XTAL1',
        'desc' => 'crystal input',
      ),
      39 => 
      array (
        'num' => '40',
        'sym' => 'XTAL2',
        'desc' => 'crystal input',
      ),
    ),
    'notes' => 
    array (
      0 => 'See <a href=\'TMS9918A\'>TMS9918A</a>',
      1 => 'TMS9928A outputs 60Hz video, TMS9929A outputs 50Hz video',
    ),
  ),
  'TPIC6B595' => 
  array (
    'description' => 'Power logic 8-bit shift register',
    'package' => 'DIP',
    'pincount' => 20,
    'family' => 'TI',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/tpic6b595.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'Vcc',
        'desc' => 'supply voltage',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'SER IN',
        'desc' => 'serial data input',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'DRAIN0',
        'desc' => 'drain output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'DRAIN1',
        'desc' => 'drain output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'DRAIN2',
        'desc' => 'drain output',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'DRAIN3',
        'desc' => 'drain output',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '~SRCLR',
        'desc' => 'clear (active low)',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => '~G',
        'desc' => 'output enable (active low)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'RCK',
        'desc' => 'storage register latch input',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'SRCK',
        'desc' => 'shift register clock input',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'DRAIN4',
        'desc' => 'drain output',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'DRAIN5',
        'desc' => 'drain output',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => 'DRAIN6',
        'desc' => 'drain output',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => 'DRAIN7',
        'desc' => 'drain output',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'SER OUT',
        'desc' => 'serial data output',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'NC',
        'desc' => 'no connection',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum continuous current (per output)',
        'val' => '150',
        'unit' => 'mA',
      ),
      1 => 
      array (
        'param' => 'Current limit (per output)',
        'val' => '500',
        'unit' => 'mA',
      ),
      2 => 
      array (
        'param' => 'Maximum drain-to-source voltage',
        'val' => '50',
        'unit' => 'V',
      ),
      3 => 
      array (
        'param' => 'Drain output rise/fall time',
        'val' => '200',
        'unit' => 'ns',
      ),
    ),
  ),
  'ULN2003' => 
  array (
    'description' => 'Seven darlington array',
    'aliases' => 
    array (
      0 => 'ULN2002',
      1 => 'ULN2004',
    ),
    'package' => 'DIP',
    'pincount' => 16,
    'family' => 'TI',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/uln2003a.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1B',
        'desc' => 'base 1',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '2B',
        'desc' => 'base 2',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '3B',
        'desc' => 'base 3',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '4B',
        'desc' => 'base 4',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '5B',
        'desc' => 'base 5',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '6B',
        'desc' => 'base 6',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '7B',
        'desc' => 'base 7',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'E',
        'desc' => 'common emitter (ground)',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'COM',
        'desc' => 'common',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => '7C',
        'desc' => 'collector 7',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '6C',
        'desc' => 'collector 6',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '5C',
        'desc' => 'collector 5',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '4C',
        'desc' => 'collector 4',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '3C',
        'desc' => 'collector 3',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '2C',
        'desc' => 'collector 2',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => '1C',
        'desc' => 'collector 1',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Series resistance at bases',
        'val' => 
        array (
          0 => 'n/a (ULN2002)',
          1 => '2.7 (ULN2003)',
          2 => '10.5 (ULN2004)',
        ),
        'unit' => 'kΩ',
      ),
      1 => 
      array (
        'param' => 'Maximum collector-emitter voltage',
        'val' => '50',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Maximum input voltage',
        'val' => '30',
        'unit' => 'V',
      ),
      3 => 
      array (
        'param' => 'Maximum peak collector current',
        'val' => '500',
        'unit' => 'mA',
      ),
    ),
    'notes' => 
    array (
      0 => 'ULN2002 is designed for use with 14V to 25V PMOS devices.',
      1 => 'ULN2003 is designed for use with 5V TTL/CMOS devices.',
      2 => 'ULN2004 is designed for use with 6V to 15V CMOS devices.',
    ),
  ),
  'ULN2803' => 
  array (
    'description' => 'Eight darlington array',
    'package' => 'DIP',
    'pincount' => 18,
    'family' => 'TI',
    'datasheet' => 'http://focus.ti.com/lit/ds/symlink/uln2803a.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => '1B',
        'desc' => 'base 1',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => '2B',
        'desc' => 'base 2',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => '3B',
        'desc' => 'base 3',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '4B',
        'desc' => 'base 4',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => '5B',
        'desc' => 'base 5',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => '6B',
        'desc' => 'base 6',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => '7B',
        'desc' => 'base 7',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => '8B',
        'desc' => 'base 8',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'GND',
        'desc' => 'ground',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'COM',
        'desc' => 'common',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => '8C',
        'desc' => 'collector 8',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => '7C',
        'desc' => 'collector 7',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => '6C',
        'desc' => 'collector 6',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => '5C',
        'desc' => 'collector 5',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => '4C',
        'desc' => 'collector 4',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => '3C',
        'desc' => 'collector 3',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => '2C',
        'desc' => 'collector 2',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => '1C',
        'desc' => 'collector 1',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Series resistance at bases',
        'val' => '2.7',
        'unit' => 'kΩ',
      ),
      1 => 
      array (
        'param' => 'Maximum collector-emitter voltage',
        'val' => '50',
        'unit' => 'V',
      ),
      2 => 
      array (
        'param' => 'Maximum input voltage',
        'val' => '30',
        'unit' => 'V',
      ),
      3 => 
      array (
        'param' => 'Maximum continuous collector current',
        'val' => '500',
        'unit' => 'mA',
      ),
    ),
  ),
  'WIRE' => 
  array (
    'description' => 'A piece of wire',
    'package' => 'DIP',
    'pincount' => 2,
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'W1',
        'desc' => 'one end of the wire',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'W2',
        'desc' => 'the other end of the wire',
      ),
    ),
    'notes' => 
    array (
      0 => 'It\'s pretty handy for connecting stuff.',
      1 => 'Resistance is usually pretty low.',
      2 => 'It bends!',
    ),
  ),
  'Z80' => 
  array (
    'description' => 'Z-80 Microprocessor',
    'aliases' => 
    array (
    ),
    'package' => 'DIP',
    'pincount' => 40,
    'family' => 'Zilog',
    'datasheet' => 'http://www.z80.info/zip/z80.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'A11',
        'desc' => 'Address Line 11 Output',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'A12',
        'desc' => 'Address Line 12 Output',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'A13',
        'desc' => 'Address Line 13 Output',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => 'A14',
        'desc' => 'Address Line 14 Output',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'A15',
        'desc' => 'Address Line 15 Output',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'CLK',
        'desc' => 'Clock Input',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'D4',
        'desc' => 'Data Line 4',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'D5',
        'desc' => 'Data Line 5',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'D3',
        'desc' => 'Data Line 3',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'D6',
        'desc' => 'Data Line 6',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'Vcc',
        'desc' => 'Power +5V',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'D2',
        'desc' => 'Data Line 2',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'D7',
        'desc' => 'Data Line 7',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'D0',
        'desc' => 'Data Line 0',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'D1',
        'desc' => 'Data Line 1',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => '~INT~',
        'desc' => 'Maskable Interrupt Input (Active Low)',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => '~NMI~',
        'desc' => 'Non-Maskable Interrupt Input (Active Low)',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => '~HALT~',
        'desc' => 'Halt State Output (Active Low)',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => '~MREQ~',
        'desc' => 'Memory Request Output (Active Low)',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => '~IORQ~',
        'desc' => 'Input/Output Request Output (Active Low)',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => '~RD~',
        'desc' => 'Read Request Output (Active Low)',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => '~WR~',
        'desc' => 'Write Request Output (Active Low)',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => '~BUSACK~',
        'desc' => 'Acknowledge Bus Request for DMA Output (Active Low)',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => '~WAIT~',
        'desc' => 'Wait Request Input (Active Low)',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => '~BUSREQ~',
        'desc' => 'Bus Request Input (Active Low)',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => '~RESET~',
        'desc' => 'Reset Input (Active Low)',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => '~M1~',
        'desc' => 'Machine Cycle 1 Output (Active Low)',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => '~RFSH~',
        'desc' => 'Dynamic Memory Refresh Output (Active Low)',
      ),
      28 => 
      array (
        'num' => '29',
        'sym' => 'GND',
        'desc' => 'Power Ground',
      ),
      29 => 
      array (
        'num' => '30',
        'sym' => 'A0',
        'desc' => 'Address Line 1 Output',
      ),
      30 => 
      array (
        'num' => '31',
        'sym' => 'A1',
        'desc' => 'Address Line 1 Output',
      ),
      31 => 
      array (
        'num' => '32',
        'sym' => 'A2',
        'desc' => 'Address Line 2 Output',
      ),
      32 => 
      array (
        'num' => '33',
        'sym' => 'A3',
        'desc' => 'Address Line 3 Output',
      ),
      33 => 
      array (
        'num' => '34',
        'sym' => 'A4',
        'desc' => 'Address Line 4 Output',
      ),
      34 => 
      array (
        'num' => '35',
        'sym' => 'A5',
        'desc' => 'Address Line 5 Output',
      ),
      35 => 
      array (
        'num' => '36',
        'sym' => 'A6',
        'desc' => 'Address Line 6 Output',
      ),
      36 => 
      array (
        'num' => '37',
        'sym' => 'A7',
        'desc' => 'Address Line 7 Output',
      ),
      37 => 
      array (
        'num' => '38',
        'sym' => 'A8',
        'desc' => 'Address Line 8 Output',
      ),
      38 => 
      array (
        'num' => '39',
        'sym' => 'A9',
        'desc' => 'Address Line 9 Output',
      ),
      39 => 
      array (
        'num' => '40',
        'sym' => 'A10',
        'desc' => 'Address Line 10 Output',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum Voltage (Vcc)',
        'val' => '6',
        'unit' => 'V',
      ),
      1 => 
      array (
        'param' => 'Clock Speed (Original Z-80)',
        'val' => '2',
        'unit' => 'MHz',
      ),
    ),
    'notes' => 
    array (
      0 => 'Registers:
<table>
<tr><td>A</td><td>Accumulator</td></tr>
<tr><td>F</td><td>Condition Flags</td></tr>
<tr><td>B & C</td><td>General Purpose 8-bit registers (may be used together as a 16-bit register)</td></tr>
<tr><td>D & E</td><td>General Purpose 8-bit registers (may be used together as a 16-bit register)</td></tr>
<tr><td>H & L</td><td>High & Low bytes of 16-bit Address Pointer Register</td></tr>
<tr><td>I</td><td>Interrupt Register - Holds upper 8 bits of memory address for vectored interrupt processing</td></tr>
<tr><td>R</td><td>Refresh Register - Automatically incremented for Dynamic Memory Refresh (read only)</td></tr>
<tr><td>IX & IY</td><td>16-bit Index Registers</td></tr>
<tr><td>SP</td><td>16-bit Stack Pointer Register</td></tr>
<tr><td>PC</td><td>A16-bit Program Counter Register</td></tr>
<tr><td>IFF</td><td>Interrupt Flip Flop Flag</td></tr>
</table>',
      1 => 'All general-purpose registers are duplicated in the prime set (A\', F\',B\', C\', D\', E\', H\', L\')',
    ),
  ),
  'Z80PIO' => 
  array (
    'description' => 'Z80-PIO',
    'aliases' => 
    array (
    ),
    'package' => 'DIP',
    'pincount' => 40,
    'family' => 'Zilog',
    'datasheet' => 'http://www.zilog.com/docs/z80/ps0180.pdf',
    'pins' => 
    array (
      0 => 
      array (
        'num' => '1',
        'sym' => 'D2',
        'desc' => 'Data Line 2 To CPU (Bi-Directional)',
      ),
      1 => 
      array (
        'num' => '2',
        'sym' => 'D7',
        'desc' => 'Data Line 7 To CPU (Bi-Directional)',
      ),
      2 => 
      array (
        'num' => '3',
        'sym' => 'D6',
        'desc' => 'Data Line 6 To CPU (Bi-Directional)',
      ),
      3 => 
      array (
        'num' => '4',
        'sym' => '~CE~',
        'desc' => 'Chip Enable Input (Active Low)',
      ),
      4 => 
      array (
        'num' => '5',
        'sym' => 'C/~D~',
        'desc' => 'Control/Data Select (High = Ctrl, Low = Data)',
      ),
      5 => 
      array (
        'num' => '6',
        'sym' => 'B/~A~',
        'desc' => 'Port A or B Select (Low = A, High = B)',
      ),
      6 => 
      array (
        'num' => '7',
        'sym' => 'PA7',
        'desc' => 'Peripheral Port A Line 7 (Bi-Directional)',
      ),
      7 => 
      array (
        'num' => '8',
        'sym' => 'PA6',
        'desc' => 'Peripheral Port A Line 6 (Bi-Directional)',
      ),
      8 => 
      array (
        'num' => '9',
        'sym' => 'PA5',
        'desc' => 'Peripheral Port A Line 5 (Bi-Directional)',
      ),
      9 => 
      array (
        'num' => '10',
        'sym' => 'PA4',
        'desc' => 'Peripheral Port A Line 4 (Bi-Directional)',
      ),
      10 => 
      array (
        'num' => '11',
        'sym' => 'GND',
        'desc' => 'Power Ground',
      ),
      11 => 
      array (
        'num' => '12',
        'sym' => 'PA3',
        'desc' => 'Peripheral Port A Line 3 (Bi-Directional)',
      ),
      12 => 
      array (
        'num' => '13',
        'sym' => 'PA2',
        'desc' => 'Peripheral Port A Line 2 (Bi-Directional)',
      ),
      13 => 
      array (
        'num' => '14',
        'sym' => 'PA1',
        'desc' => 'Peripheral Port A Line 1 (Bi-Directional)',
      ),
      14 => 
      array (
        'num' => '15',
        'sym' => 'PA0',
        'desc' => 'Peripheral Port A Line 0 (Bi-Directional)',
      ),
      15 => 
      array (
        'num' => '16',
        'sym' => '~ASTB~',
        'desc' => 'Port A Strobe Input from Peripheral (Active Low)',
      ),
      16 => 
      array (
        'num' => '17',
        'sym' => '~BSTB~',
        'desc' => 'Port B Strobe Input from Peripherial (Active Low)',
      ),
      17 => 
      array (
        'num' => '18',
        'sym' => 'ARDY',
        'desc' => 'Register A Ready Output (Active High)',
      ),
      18 => 
      array (
        'num' => '19',
        'sym' => 'D0',
        'desc' => 'Data Line 0 To CPU (Bi-Directional)',
      ),
      19 => 
      array (
        'num' => '20',
        'sym' => 'D1',
        'desc' => 'Data Line 1 To CPU (Bi-Directional)',
      ),
      20 => 
      array (
        'num' => '21',
        'sym' => 'BRDY',
        'desc' => 'Register B Ready Output (Active High)',
      ),
      21 => 
      array (
        'num' => '22',
        'sym' => 'IEO',
        'desc' => 'Interrupt Enable Output (Active High)',
      ),
      22 => 
      array (
        'num' => '23',
        'sym' => '~INT~',
        'desc' => 'Interrupt Input (Active Low)',
      ),
      23 => 
      array (
        'num' => '24',
        'sym' => 'IEI',
        'desc' => 'Interrupt Enable Input (Active High)',
      ),
      24 => 
      array (
        'num' => '25',
        'sym' => 'CLK',
        'desc' => 'System Clock Input',
      ),
      25 => 
      array (
        'num' => '26',
        'sym' => '+5V',
        'desc' => 'Power 5V DC',
      ),
      26 => 
      array (
        'num' => '27',
        'sym' => 'PB0',
        'desc' => 'Peripheral Port A Line 0 (Bi-Directional)',
      ),
      27 => 
      array (
        'num' => '28',
        'sym' => 'PB1',
        'desc' => 'Peripheral Port A Line 1 (Bi-Directional)',
      ),
      28 => 
      array (
        'num' => '29',
        'sym' => 'PB2',
        'desc' => 'Peripheral Port A Line 2 (Bi-Directional)',
      ),
      29 => 
      array (
        'num' => '30',
        'sym' => 'PB3',
        'desc' => 'Peripheral Port A Line 3 (Bi-Directional)',
      ),
      30 => 
      array (
        'num' => '31',
        'sym' => 'PB4',
        'desc' => 'Peripheral Port A Line 4 (Bi-Directional)',
      ),
      31 => 
      array (
        'num' => '32',
        'sym' => 'PB5',
        'desc' => 'Peripheral Port A Line 5 (Bi-Directional)',
      ),
      32 => 
      array (
        'num' => '33',
        'sym' => 'PB6',
        'desc' => 'Peripheral Port A Line 6 (Bi-Directional)',
      ),
      33 => 
      array (
        'num' => '34',
        'sym' => 'PB7',
        'desc' => 'Peripheral Port A Line 7 (Bi-Directional)',
      ),
      34 => 
      array (
        'num' => '35',
        'sym' => '~RD~',
        'desc' => 'Read Request Input from CPU (Active Low)',
      ),
      35 => 
      array (
        'num' => '36',
        'sym' => '~IORQ~',
        'desc' => 'Input/Output Request Input from CPU (Active Low)',
      ),
      36 => 
      array (
        'num' => '37',
        'sym' => '~M1~',
        'desc' => 'Machine Cycle 1 Input from CPU (Active Low)',
      ),
      37 => 
      array (
        'num' => '38',
        'sym' => 'D3',
        'desc' => 'Data Line 3 To CPU (Bi-Directional)',
      ),
      38 => 
      array (
        'num' => '39',
        'sym' => 'D4',
        'desc' => 'Data Line 4 To CPU (Bi-Directional)',
      ),
      39 => 
      array (
        'num' => '40',
        'sym' => 'D5',
        'desc' => 'Data Line 5 To CPU (Bi-Directional)',
      ),
    ),
    'specs' => 
    array (
      0 => 
      array (
        'param' => 'Maximum Voltage Vcc',
        'val' => '7',
        'unit' => 'VDC',
      ),
      1 => 
      array (
        'param' => 'Maximum Input Voltage',
        'val' => 'Vcc + 0.3',
        'unit' => 'VDC',
      ),
      2 => 
      array (
        'param' => 'Storage Temperature',
        'val' => '-65 to +150',
        'unit' => 'Degrees C',
      ),
    ),
    'notes' => 
    array (
      0 => 'The Z8O Parallel I/O (PlO) Circuit is a programmable, two port device which provides a TTL compatible interface between peripheral devices and the Z80-GPU. The CPU can configure the Z8O-PIO to interface with a wide range of peripheral devices with no other external logic required, Typical peripheral devices that are fully compatible with the Z80-PIO include most keyboards, paper tape readers and punches, printers, PROM programmers, etc. The Z8O-PIO is packaged in a 40-pin DIP, or a 44-pin PLCC, or a 44-pin OFP. NMOS and CMOS versions are also available. Major features of the Z80-PlO include.',
      1 => 'One of the unique features of the Z80-PlO that separates it from other interface controllers is that all data transfer between the peripheral device and the CPU is accomplished under total interrupt control. The interrupt logic of the PIO permits full usage of the efficient interrupt capabilities of the Z80-CPU during I/0 transfers. All logic necessary to implement a fully nested interrupt structure is included in the PIO so that additional circuits are not required. Another unique feature of the PlO is that it can be programmed to interrupt the CPU on the occurrence of specified status conditions in the peripheral device. For example, the PlO can be programmed to interrupt if any specified peripheral alarm conditions should occur. This interrupt capability reduces the amount of time that the processor must spend in polling peripheral status.',
    ),
  ),
);