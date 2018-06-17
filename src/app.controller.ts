import { Get, Controller, Header, Res } from '@nestjs/common';
import { AppService } from './app.service';
import {resolve} from 'path'
@Controller()
export class AppController {
  constructor(private readonly appService: AppService) {}

  @Header('Cache-Control', 'text/plain')

  @Get()
  root(@Res() response): void {
    // the homepage will load our index.html which contains angular logic
    response.sendFile(resolve('./App/src/index.html'));
  }
}
